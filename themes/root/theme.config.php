<?php
return [
    'extends' => false,
    'helpers' => [
        'factories' => [
            'Laminas\View\Helper\HeadTitle' => 'VuFind\View\Helper\Root\HeadTitleFactory',
            'VuFind\View\Helper\Root\AccountCapabilities' => 'VuFind\View\Helper\Root\AccountCapabilitiesFactory',
            'VuFind\View\Helper\Root\AccountMenu' => 'VuFind\View\Helper\Root\AccountMenuFactory',
            'VuFind\View\Helper\Root\AdminMenu' => 'VuFind\View\Helper\Root\AdminMenuFactory',
            'VuFind\View\Helper\Root\AddEllipsis' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\AlphaBrowse' => 'VuFind\View\Helper\Root\AlphaBrowseFactory',
            'VuFind\View\Helper\Root\Auth' => 'VuFind\View\Helper\Root\AuthFactory',
            'VuFind\View\Helper\Root\AuthorNotes' => 'VuFind\View\Helper\Root\ContentLoaderFactory',
            'VuFind\View\Helper\Root\AvailabilityStatus' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Breadcrumbs' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Browse' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\BulkAction' => 'VuFind\View\Helper\Root\BulkActionFactory',
            'VuFind\View\Helper\Root\Captcha' => 'VuFind\View\Helper\Root\CaptchaFactory',
            'VuFind\View\Helper\Root\Cart' => 'VuFind\View\Helper\Root\CartFactory',
            'VuFind\View\Helper\Root\Citation' => 'VuFind\View\Helper\Root\CitationFactory',
            'VuFind\View\Helper\Root\CleanHtml' => 'VuFind\View\Helper\Root\CleanHtmlFactory',
            'VuFind\View\Helper\Root\Component' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Config' => 'VuFind\View\Helper\Root\ConfigFactory',
            'VuFind\View\Helper\Root\Content' => 'VuFind\View\Helper\Root\ContentFactory',
            'VuFind\View\Helper\Root\CookieConsent' => 'VuFind\View\Helper\Root\CookieConsentFactory',
            'VuFind\View\Helper\Root\CookieManager' => 'VuFind\View\Helper\Root\CookieManagerFactory',
            'VuFind\View\Helper\Root\ContentBlock' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Context' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Csp' => 'VuFind\View\Helper\Root\CspFactory',
            'VuFind\View\Helper\Root\CspNonce' => 'VuFind\View\Helper\Root\CspNonceFactory',
            'VuFind\View\Helper\Root\CurrentPath' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\DateTime' => 'VuFind\View\Helper\Root\DateTimeFactory',
            'VuFind\View\Helper\Root\DisplayLanguageOption' => 'VuFind\View\Helper\Root\DisplayLanguageOptionFactory',
            'VuFind\View\Helper\Root\EscapeOrCleanHtml' => 'VuFind\View\Helper\Root\EscapeOrCleanHtmlFactory',
            'VuFind\View\Helper\Root\ExplainElement' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Export' => 'VuFind\View\Helper\Root\ExportFactory',
            'VuFind\View\Helper\Root\Feedback' => 'VuFind\View\Helper\Root\FeedbackFactory',
            'VuFind\View\Helper\Root\Flashmessages' => 'VuFind\View\Helper\Root\FlashmessagesFactory',
            'VuFind\View\Helper\Root\GeoCoords' => 'VuFind\View\Helper\Root\GeoCoordsFactory',
            'VuFind\View\Helper\Root\GoogleAnalytics' => 'VuFind\View\Helper\Root\GoogleAnalyticsFactory',
            'VuFind\View\Helper\Root\GoogleTagManager' => 'VuFind\View\Helper\Root\GoogleTagManagerFactory',
            'VuFind\View\Helper\Root\HelpText' => 'VuFind\View\Helper\Root\HelpTextFactory',
            'VuFind\View\Helper\Root\Highlight' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\HistoryLabel' => 'VuFind\View\Helper\Root\HistoryLabelFactory',
            'VuFind\View\Helper\Root\Holdings' => 'VuFind\View\Helper\Root\HoldingsFactory',
            'VuFind\View\Helper\Root\HtmlSafeJsonEncode' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Icon' => 'VuFind\View\Helper\Root\IconFactory',
            'VuFind\View\Helper\Root\IdentifierLinker' => 'VuFind\View\Helper\Root\IdentifierLinkerFactory',
            'VuFind\View\Helper\Root\Ils' => 'VuFind\View\Helper\Root\IlsFactory',
            'VuFind\View\Helper\Root\JsConfigs' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\JsIcons' => 'VuFind\View\Helper\Root\JsIconsFactory',
            'VuFind\View\Helper\Root\JsTranslations' => 'VuFind\View\Helper\Root\JsTranslationsFactory',
            'VuFind\View\Helper\Root\KeepAlive' => 'VuFind\View\Helper\Root\KeepAliveFactory',
            'VuFind\View\Helper\Root\LibraryCards' => 'VuFind\View\Helper\Root\LibraryCardsFactory',
            'VuFind\View\Helper\Root\Linkify' => 'VuFind\View\Helper\Root\LinkifyFactory',
            'VuFind\View\Helper\Root\LocalizedNumber' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\MakeLink' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\MakeTag' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Markdown' => 'VuFind\View\Helper\Root\MarkdownFactory',
            'VuFind\View\Helper\Root\Matomo' => 'VuFind\View\Helper\Root\MatomoFactory',
            'VuFind\View\Helper\Root\Metadata' => 'VuFind\View\Helper\Root\MetadataFactory',
            'VuFind\View\Helper\Root\OpenUrl' => 'VuFind\View\Helper\Root\OpenUrlFactory',
            'VuFind\View\Helper\Root\OperatorToFieldPrefix' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Overdrive' => 'VuFind\View\Helper\Root\OverdriveFactory',
            'VuFind\View\Helper\Root\Permission' => 'VuFind\View\Helper\Root\PermissionFactory',
            'VuFind\View\Helper\Root\Piwik' => 'VuFind\View\Helper\Root\PiwikFactory',
            'VuFind\View\Helper\Root\PrintArrayHtml' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Printms' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\ProxyUrl' => 'VuFind\View\Helper\Root\ProxyUrlFactory',
            'VuFind\View\Helper\Root\Ratings' => 'VuFind\View\Helper\Root\RatingsFactory',
            'VuFind\View\Helper\Root\Recommend' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Record' => 'VuFind\View\Helper\Root\RecordFactory',
            'VuFind\View\Helper\Root\RecordDataFormatter' => 'VuFind\View\Helper\Root\RecordDataFormatterFactory',
            'VuFind\View\Helper\Root\RecordLinker' => 'VuFind\View\Helper\Root\RecordLinkerFactory',
            'VuFind\View\Helper\Root\Relais' => 'VuFind\View\Helper\Root\RelaisFactory',
            'VuFind\View\Helper\Root\Related' => 'VuFind\View\Helper\Root\RelatedFactory',
            'VuFind\View\Helper\Root\RenderArray' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\ResultFeed' => 'VuFind\View\Helper\Root\ResultFeedFactory',
            'VuFind\View\Helper\Root\SafeMoneyFormat' => 'VuFind\View\Helper\Root\SafeMoneyFormatFactory',
            'VuFind\View\Helper\Root\SchemaOrg' => 'VuFind\View\Helper\Root\SchemaOrgFactory',
            'VuFind\View\Helper\Root\SearchBox' => 'VuFind\View\Helper\Root\SearchBoxFactory',
            'VuFind\View\Helper\Root\SearchMemory' => 'VuFind\View\Helper\Root\SearchMemoryFactory',
            'VuFind\View\Helper\Root\SearchOptions' => 'VuFind\View\Helper\Root\SearchOptionsFactory',
            'VuFind\View\Helper\Root\SearchParams' => 'VuFind\View\Helper\Root\SearchParamsFactory',
            'VuFind\View\Helper\Root\SearchSettings' => 'VuFind\View\Helper\Root\SearchSettingsFactory',
            'VuFind\View\Helper\Root\SearchTabs' => 'VuFind\View\Helper\Root\SearchTabsFactory',
            'VuFind\View\Helper\Root\Session' => 'VuFind\View\Helper\Root\SessionFactory',
            'VuFind\View\Helper\Root\ShortenUrl' => 'VuFind\View\Helper\Root\ShortenUrlFactory',
            'VuFind\View\Helper\Root\Sorter' => 'VuFind\View\Helper\Root\SorterFactory',
            'VuFind\View\Helper\Root\SortFacetList' => 'VuFind\View\Helper\Root\SortFacetListFactory',
            'VuFind\View\Helper\Root\Summaries' => 'VuFind\View\Helper\Root\ContentLoaderFactory',
            'VuFind\View\Helper\Root\Summon' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\SyndeticsPlus' => 'VuFind\View\Helper\Root\SyndeticsPlusFactory',
            'VuFind\View\Helper\Root\SystemEmail' => 'VuFind\View\Helper\Root\SystemEmailFactory',
            'VuFind\View\Helper\Root\ThemeConfig' => 'VuFind\View\Helper\Root\ThemeConfigFactory',
            'VuFind\View\Helper\Root\TransEsc' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\TransEscAttr' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\TransEscWithPrefix' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Translate' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\TranslationEmpty' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Truncate' => 'Laminas\ServiceManager\Factory\InvokableFactory',
            'VuFind\View\Helper\Root\Url' => 'VuFind\View\Helper\Root\UrlFactory',
            'VuFind\View\Helper\Root\UserList' => 'VuFind\View\Helper\Root\UserListFactory',
            'VuFind\View\Helper\Root\UserTags' => 'VuFind\View\Helper\Root\UserTagsFactory',

            'Laminas\View\Helper\EscapeHtmlAttr' => 'VuFind\View\Helper\Root\EscapeHtmlAttrFactory',
            'Laminas\View\Helper\ServerUrl' => 'VuFind\View\Helper\Root\ServerUrlFactory',
        ],
        'initializers' => [
            \VuFind\View\Helper\Root\HelperInitializer::class,
        ],
        'aliases' => [
            'accountCapabilities' => 'VuFind\View\Helper\Root\AccountCapabilities',
            'accountMenu' => 'VuFind\View\Helper\Root\AccountMenu',
            'adminMenu' => 'VuFind\View\Helper\Root\AdminMenu',
            'addEllipsis' => 'VuFind\View\Helper\Root\AddEllipsis',
            'alphabrowse' => 'VuFind\View\Helper\Root\AlphaBrowse',
            'auth' => 'VuFind\View\Helper\Root\Auth',
            'authorNotes' => 'VuFind\View\Helper\Root\AuthorNotes',
            'availabilityStatus' => 'VuFind\View\Helper\Root\AvailabilityStatus',
            'breadcrumbs' => 'VuFind\View\Helper\Root\Breadcrumbs',
            'browse' => 'VuFind\View\Helper\Root\Browse',
            'bulkAction' => 'VuFind\View\Helper\Root\BulkAction',
            'captcha' => 'VuFind\View\Helper\Root\Captcha',
            'cart' => 'VuFind\View\Helper\Root\Cart',
            'citation' => 'VuFind\View\Helper\Root\Citation',
            'cleanHtml' => 'VuFind\View\Helper\Root\CleanHtml',
            'component' => 'VuFind\View\Helper\Root\Component',
            'config' => 'VuFind\View\Helper\Root\Config',
            'content' => 'VuFind\View\Helper\Root\Content',
            'contentBlock' => 'VuFind\View\Helper\Root\ContentBlock',
            'context' => 'VuFind\View\Helper\Root\Context',
            'cookieConsent' => 'VuFind\View\Helper\Root\CookieConsent',
            'cookieManager' => 'VuFind\View\Helper\Root\CookieManager',
            'csp' => 'VuFind\View\Helper\Root\Csp',
            'cspNonce' => 'VuFind\View\Helper\Root\CspNonce',
            'currentPath' => 'VuFind\View\Helper\Root\CurrentPath',
            'dateTime' => 'VuFind\View\Helper\Root\DateTime',
            'displayLanguageOption' => 'VuFind\View\Helper\Root\DisplayLanguageOption',
            'escapeOrCleanHtml' => 'VuFind\View\Helper\Root\EscapeOrCleanHtml',
            'explainElement' => 'VuFind\View\Helper\Root\ExplainElement',
            'export' => 'VuFind\View\Helper\Root\Export',
            'feedback' => 'VuFind\View\Helper\Root\Feedback',
            'flashmessages' => 'VuFind\View\Helper\Root\Flashmessages',
            'geocoords' => 'VuFind\View\Helper\Root\GeoCoords',
            'googleanalytics' => 'VuFind\View\Helper\Root\GoogleAnalytics',
            'googleTagManager' => 'VuFind\View\Helper\Root\GoogleTagManager',
            'helpText' => 'VuFind\View\Helper\Root\HelpText',
            'highlight' => 'VuFind\View\Helper\Root\Highlight',
            'historylabel' => 'VuFind\View\Helper\Root\HistoryLabel',
            'holdings' => 'VuFind\View\Helper\Root\Holdings',
            'htmlSafeJsonEncode' => 'VuFind\View\Helper\Root\HtmlSafeJsonEncode',
            'identifierLinker' => 'VuFind\View\Helper\Root\IdentifierLinker',
            'ils' => 'VuFind\View\Helper\Root\Ils',
            'icon' => 'VuFind\View\Helper\Root\Icon',
            'jsConfigs' => 'VuFind\View\Helper\Root\JsConfigs',
            'jsIcons' => 'VuFind\View\Helper\Root\JsIcons',
            'jsTranslations' => 'VuFind\View\Helper\Root\JsTranslations',
            'keepAlive' => 'VuFind\View\Helper\Root\KeepAlive',
            'libraryCards' => 'VuFind\View\Helper\Root\LibraryCards',
            'linkify' => 'VuFind\View\Helper\Root\Linkify',
            'localizedNumber' => 'VuFind\View\Helper\Root\LocalizedNumber',
            'makeLink' => 'VuFind\View\Helper\Root\MakeLink',
            'makeTag' => 'VuFind\View\Helper\Root\MakeTag',
            'markdown' => 'VuFind\View\Helper\Root\Markdown',
            'matomo' => 'VuFind\View\Helper\Root\Matomo',
            'metadata' => 'VuFind\View\Helper\Root\Metadata',
            'openUrl' => 'VuFind\View\Helper\Root\OpenUrl',
            'operatorToFieldPrefix' => 'VuFind\View\Helper\Root\OperatorToFieldPrefix',
            'overdrive' => 'VuFind\View\Helper\Root\Overdrive',
            'permission' => 'VuFind\View\Helper\Root\Permission',
            'piwik' => 'VuFind\View\Helper\Root\Piwik',
            'printArrayHtml' => 'VuFind\View\Helper\Root\PrintArrayHtml',
            'printms' => 'VuFind\View\Helper\Root\Printms',
            'proxyUrl' => 'VuFind\View\Helper\Root\ProxyUrl',
            'ratings' => 'VuFind\View\Helper\Root\Ratings',
            'recommend' => 'VuFind\View\Helper\Root\Recommend',
            'record' => 'VuFind\View\Helper\Root\Record',
            'recordDataFormatter' => 'VuFind\View\Helper\Root\RecordDataFormatter',
            'recordLinker' => 'VuFind\View\Helper\Root\RecordLinker',
            'relais' => 'VuFind\View\Helper\Root\Relais',
            'related' => 'VuFind\View\Helper\Root\Related',
            'renderArray' => 'VuFind\View\Helper\Root\RenderArray',
            'resultfeed' => 'VuFind\View\Helper\Root\ResultFeed',
            'safeMoneyFormat' => 'VuFind\View\Helper\Root\SafeMoneyFormat',
            'schemaOrg' => 'VuFind\View\Helper\Root\SchemaOrg',
            'searchMemory' => 'VuFind\View\Helper\Root\SearchMemory',
            'searchOptions' => 'VuFind\View\Helper\Root\SearchOptions',
            'searchParams' => 'VuFind\View\Helper\Root\SearchParams',
            'searchSettings' => 'VuFind\View\Helper\Root\SearchSettings',
            'searchTabs' => 'VuFind\View\Helper\Root\SearchTabs',
            'searchbox' => 'VuFind\View\Helper\Root\SearchBox',
            'session' => 'VuFind\View\Helper\Root\Session',
            'shortenUrl' => 'VuFind\View\Helper\Root\ShortenUrl',
            'sorter' => 'VuFind\View\Helper\Root\Sorter',
            'sortFacetList' => 'VuFind\View\Helper\Root\SortFacetList',
            'summaries' => 'VuFind\View\Helper\Root\Summaries',
            'summon' => 'VuFind\View\Helper\Root\Summon',
            'syndeticsPlus' => 'VuFind\View\Helper\Root\SyndeticsPlus',
            'systemEmail' => 'VuFind\View\Helper\Root\SystemEmail',
            'themeConfig' => 'VuFind\View\Helper\Root\ThemeConfig',
            'transEsc' => 'VuFind\View\Helper\Root\TransEsc',
            'transEscAttr' => 'VuFind\View\Helper\Root\TransEscAttr',
            'transEscWithPrefix' => 'VuFind\View\Helper\Root\TransEscWithPrefix',
            'translate' => 'VuFind\View\Helper\Root\Translate',
            'translationEmpty' => 'VuFind\View\Helper\Root\TranslationEmpty',
            'truncate' => 'VuFind\View\Helper\Root\Truncate',
            'userlist' => 'VuFind\View\Helper\Root\UserList',
            'usertags' => 'VuFind\View\Helper\Root\UserTags',

            'Laminas\View\Helper\Url' => 'VuFind\View\Helper\Root\Url',
        ],
    ],
];
