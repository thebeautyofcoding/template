
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



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
     [
         'custom element',
         'heiner_newcontentelement',
         'content-text',
     ],
     'textmedia',
     'after'
 );


// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['heiner_newcontentelement'] = [
   'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header; Internal title (not displayed),
            bodytext;Schreiben Sie einen Text,
            image; BILD
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
   ],
];
?>