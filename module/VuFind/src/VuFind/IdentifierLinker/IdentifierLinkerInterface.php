<?php

/**
 * Identifier linker interface
 *
 * PHP version 8
 *
 * Copyright (C) Villanova University 2018-2025.
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
 * @package  IdentifierLinker
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:plugins:identifier_linkers Wiki
 */

namespace VuFind\IdentifierLinker;

/**
 * Identifier linker interface
 *
 * @category VuFind
 * @package  IdentifierLinker
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:plugins:identifier_linkers Wiki
 */
interface IdentifierLinkerInterface
{
    /**
     * Given an array of identifier arrays, perform a lookup and return an associative array
     * of arrays, matching the keys of the input array. Each output array contains one or more
     * associative arrays with required 'link' (URL to related resource) and 'label' (display text)
     * keys and an optional 'icon' (URL to icon graphic) or localIcon (name of configured icon in
     * theme) key.
     *
     * @param array[] $idArray Identifiers to look up
     *
     * @return array
     */
    public function getLinks(array $idArray): array;
}
