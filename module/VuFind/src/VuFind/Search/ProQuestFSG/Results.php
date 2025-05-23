<?php

/**
 * ProQuest Federated Search Gateway Search Results
 *
 * PHP version 8
 *
 * Copyright (C) Villanova University 2011, 2022.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category VuFind
 * @package  Search_ProQuestFSG
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org Main Page
 */

namespace VuFind\Search\ProQuestFSG;

use VuFindSearch\Command\SearchCommand;

use function strlen;

/**
 * ProQuest Federated Search Gateway Search Parameters
 *
 * @category VuFind
 * @package  Search_ProQuestFSG
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org Main Page
 */
class Results extends \VuFind\Search\Base\Results
{
    /**
     * Search backend identifier.
     *
     * @var string
     */
    protected $backendId = 'ProQuestFSG';

    /**
     * Facets returned in search response.
     *
     * @var array
     */
    protected $responseFacets = null;

    /**
     * Simplified version of result facets.
     *
     * @var array
     */
    protected $simplifiedResponseFacets = [];

    /**
     * Support method for performAndProcessSearch -- perform a search based on the
     * parameters passed to the object.
     *
     * @return void
     */
    protected function performSearch()
    {
        $query  = $this->getParams()->getQuery();
        $allTerms = $query->getAllTerms();
        if (!strlen($allTerms)) {
            $this->storeErrorResponse('empty_search_disallowed');
            return;
        }
        $limit  = $this->getParams()->getLimit();
        $offset = $this->getStartRecord();
        $params = $this->getParams()->getBackendParameters();
        $command = new SearchCommand(
            $this->backendId,
            $query,
            $offset,
            $limit,
            $params
        );
        $collection = $this->getSearchService()
            ->invoke($command)->getResult();

        $this->resultTotal = $collection->getTotal();
        $this->results = $collection->getRecords();

        // ProQuest does not return facets unless the startRecord is 1
        if ($offset === 1) {
            $this->responseFacets = $collection->getFacets();
            $this->simplifiedResponseFacets = $this->simplifyFacets($this->responseFacets);
        }
    }

    /**
     * Store an empty response with an error message instead of performing a search.
     *
     * @param string|array $error Error message(s) to display to user.
     *
     * @return void
     */
    protected function storeErrorResponse(string|array $error): void
    {
        $this->resultTotal = 0;
        $this->results = [];
        $this->simplifiedResponseFacets = [];
        $this->responseFacets = [];
        $this->errors = (array)$error;
    }

    /**
     * Returns the stored list of facets for the last search
     *
     * @param array $filter Array of field => on-screen description listing
     * all of the desired facet fields; set to null to get all configured values.
     *
     * @return array        Facets data arrays
     */
    public function getFacetList($filter = null)
    {
        $activeFacets = $filter ?? $this->getParams()->getFacetConfig();
        if (!empty($activeFacets) && empty($this->simplifiedResponseFacets)) {
            // Save actual search data
            $resultTotal = $this->resultTotal;
            $results = $this->results;
            $suggestions = $this->suggestions;
            $errors = $this->errors;
            $startRecordOverride = $this->startRecordOverride;

            // The API only provides facets when startRecord == 1.
            $this->overrideStartRecord(1);
            $this->performAndProcessSearch();

            // Restore actual search data
            $this->resultTotal = $resultTotal;
            $this->results = $results;
            $this->suggestions = $suggestions;
            $this->errors = $errors;
            $this->overrideStartRecord($startRecordOverride);
        }
        return $this->buildFacetList($this->simplifiedResponseFacets, $filter);
    }

    /**
     * Simply raw ProQuestFSG facets to the form that VuFind templates expect.
     *
     * @param array $rawFacets Raw facts returned from the record collection
     *
     * @return array Simple format of facets
     */
    protected function simplifyFacets($rawFacets)
    {
        $simpleFacets = [];
        foreach ($rawFacets as $label => $rawFacet) {
            // Sort by hit count, descending
            usort($rawFacet, fn ($a, $b) => ($a['count'] ?? 0) < ($b['count'] ?? 0));

            $simpleFacet = [];
            foreach ($rawFacet as $rawFacetValue) {
                $facetName = "{$rawFacetValue['code']}|{$rawFacetValue['name']}";
                $simpleFacet[$facetName] = $rawFacetValue['count'];
            }
            $simpleFacets[$label] = $simpleFacet;
        }
        return $simpleFacets;
    }
}
