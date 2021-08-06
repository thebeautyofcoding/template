
<?php
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols-with-header-container', // CType
            '2 Column Container With Header', // label
            'Some Description of the Container', // description
            [
                [
                    ['name' => 'header', 'colPos' => 200, 'colspan' => 2, 'allowed' => ['CType' => 'header, textmedia']]
                ],
                [
                    ['name' => 'left side', 'colPos' => 201],
                    ['name' => 'right side', 'colPos' => 202]
                ]
            ] // grid configuration
        )
    )
);



// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
//     'tt_content',
//     'CType',
//      [
//          'custom element',
//          'portfolio_list',
//          'content-text',
//      ],
//      'textmedia',
//      'after'
//  );
 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
     [
         'custom element',
         'portfolio_list2',
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
$GLOBALS['TCA']['tt_content']['types']['portfolio_list2']= [
    'showitem' => '
          --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
             --palette--;;general,
             image; Image,
             header; Title,
          
             portfolio_list2;Elemente,
             
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
       'portfolio_list2' => [


        'exclude' => true,
        'label' => 'Einzelnes-Portfolio',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
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
    'portfolio_list2' => [


        'exclude' => true,
        'label' => 'Einzelnes-Portfolio',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
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

?>