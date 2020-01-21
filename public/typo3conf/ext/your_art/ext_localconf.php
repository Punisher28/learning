<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Khas.YourArt',
    'Arts',
    [
        'Auction'=>'list,
                    searchForm,
                    detail,
                    detailAuthor,
                    ajaxAddCart,
                    ajaxGetCart,
                    ajaxRemoveCart,
                    cart,
                    ajaxUpdateCart,
                    countOfAllPaintingsByAuthor,
                    addOrder,
                    order',
    ],
    [
        'Auction'=>'list,
                    searchForm,
                    detail,
                    detailAuthor,
                    ajaxAddCart,
                    ajaxGetCart,
                    ajaxRemoveCart,
                    cart,
                    ajaxUpdateCart,
                    countOfAllPaintingsByAuthor,
                    addOrder,
                    order',
    ]
);
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['yourart'] = 'Khas\\YourArt\\Hooks\\DataHandler';
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/class.db_list_extra.inc']['actions'][] = 'Khas\\YourArt\\Hooks\\EntryRecordListHook';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][DatabaseRecordList::class]['customizeCsvRow'][] = 'Khas\\YourArt\\Hooks\\DatabaseRecordListHook';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1575560010] = [
    'nodeName' => 'CountField',
    'priority' => 40,
    'class' => \Khas\YourArt\Form\Element\CountField::class,
];