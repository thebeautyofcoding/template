<?php
defined('TYPO3_MODE') || die();





/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['tt_content']['types']['1']['showitem'])) {
    $GLOBALS['TCA']['tt_content']['types']['Tx_Heiner_Content']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['1']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tt_content']['types'])) {
    // use first entry in types array
    $tt_content_type_definition = reset($GLOBALS['TCA']['tt_content']['types']);
    $GLOBALS['TCA']['tt_content']['types']['Tx_Heiner_Content']['showitem'] = $tt_content_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['tt_content']['types']['Tx_Heiner_Content']['showitem'] = '';
}
$GLOBALS['TCA']['tt_content']['types']['Tx_Heiner_Content']['showitem'] .= ',--div--;LLL:EXT:heiner/Resources/Private/Language/locallang_db.xlf:tx_heiner_domain_model_content,';
$GLOBALS['TCA']['tt_content']['types']['Tx_Heiner_Content']['showitem'] .= 'header, bodytext, image';

$GLOBALS['TCA']['tt_content']['columns'][$GLOBALS['TCA']['tt_content']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:heiner/Resources/Private/Language/locallang_db.xlf:tt_content.tx_extbase_type.Tx_Heiner_Content','Tx_Heiner_Content'];



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
     [
         'custom element',
         'portfolio_list',
         'content-text',
     ],
     'textmedia',
     'after'
 );


// $GLOBALS['TCA']['tt_content']['types']['portfolio_list']= [
//    'showitem' => '
//          --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
//             --palette--;;general,
//             image; Image,
//             header; Title,
         
//             bodytext; Schreiben Sie einen Text,
            
//          --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
//             --palette--;;hidden,
//             --palette--;;access,
//       ',
//    'columnsOverrides' => [
//       'bodytext' => [
//          'config' => [
//             'enableRichtext' => true,
//             'richtextConfiguration' => 'default',
//          ],
//       ],
//     ],



// ];
$GLOBALS['TCA']['tt_content']['types']['portfolio_list']= [
    'showitem' => '
          --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
             --palette--;;general,
            
             header; Title,
          
             portfolio_list_item;Elemente,
             
          --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
             --palette--;;hidden,
             --palette--;;access,
       ',
    'columnsOverrides' => [
       'bodytext' => [
          'config' => [
             'enableRichtext' => true,
             'richtextConfiguration' => 'default',
          ],
       ],
       'portfolio_list_item' => [


        'exclude' => true,
        'label' => 'Einzelnes-Portfolio',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tx_heiner_domain_model_content',
            'foreign_table' => 'tx_heiner_domain_model_content',
            'foreign_field' => 'portfolio_list',
      
           
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => [
             
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ]
            ],

        ],

    ],
     ],
 
 
 
 ];


// $GLOBALS['TCA']['tt_content']['columns']['header']['config']=[
//     'type' => 'inline',
//     'foreign_table' => 'tt_content',
//     'foreign_field' => 'header',
//     'foreign_sortby' => 'sorting',
//     'maxitems' => 9999,
//     'appearance' => [
//         'collapseAll' => 0,
//         'levelLinksPosition' => 'top',
//         'showSynchronizationLink' => 1,
//         'showPossibleLocalizationRecords' => 1,
//         'useSortable' => 1,
//         'showAllLocalizationLink' => 1 
//     ]
// ];
// $GLOBALS['TCA']['tt_content']['columns']['bodytext']['config']=[
//     'type' => 'inline',
//     'foreign_table' => 'tt_content',
//     'foreign_field' => 'header',
//     'foreign_sortby' => 'sorting',
//     'maxitems' => 9999,
//     'appearance' => [
//         'collapseAll' => 0,
//         'levelLinksPosition' => 'top',
//         'showSynchronizationLink' => 1,
//         'showPossibleLocalizationRecords' => 1,
//         'useSortable' => 1,
//         'showAllLocalizationLink' => 1 
//     ]
// ];
// $GLOBALS['TCA']['tt_content']['columns']['image']['config']=[
//     'type' => 'inline',
//     'foreign_table' => 'tt_content',
//     'foreign_field' => 'image',
//     'foreign_sortby' => 'sorting',
//     'maxitems' => 9999,
//     'appearance' => [
//         'collapseAll' => 0,
//         'levelLinksPosition' => 'top',
//         'showSynchronizationLink' => 1,
//         'showPossibleLocalizationRecords' => 1,
//         'useSortable' => 1,
//         'showAllLocalizationLink' => 1 
//     ]
// ];


$temporaryColumn = [
    'portfolio_list_item' => [


        'exclude' => true,
        'label' => 'Einzelnes-Portfolio',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
       
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => [
             
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ]
            ],

        ],

    ],
 ];
 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumn);


 


//  $customImage = [
//     'portfolio_list' => [


//         'exclude' => true,
//         'label' => 'Einzelnes-Portfolio',
//         'config' => [
//             'type' => 'inline',
//             'foreign_table' => 'tt_content',
//             'foreign_field' => 'teaser_field',
//             'foreign_sortby' => 'sorting',
//             'maxitems' => 9999,
//             'appearance' => [
//                 'collapseAll' => 0,
//                 'levelLinksPosition' => 'top',
//                 'showSynchronizationLink' => 1,
//                 'showPossibleLocalizationRecords' => 1,
//                 'useSortable' => 1,
//                 'showAllLocalizationLink' => 1 
//             ],
//         ],



//     ],
//  ];
//  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $customImage);


