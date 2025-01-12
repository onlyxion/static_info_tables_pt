<?php /** @noinspection PhpUndefinedVariableInspection */

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_pt".
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (pt)',
    'description' => '(pt) language pack for the Static Info Tables providing localized names for countries.',
    'category' => 'misc',
    'version' => '6.9.2',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => false,
    'author' => 'Ephraim Härer',
    'author_email' => 'ephraim.haerer@renolit.com',
    'author_company' => 'RENOLIT SE',
    'constraints' => [
        'depends' => array(
            'typo3' => '9.5.17-11.5.99',
            'static_info_tables' => '6.9.0-11.5.99',
            'php' => '7.2.0-0.0.0',
        ),
        'conflicts' => [
        ],
        'suggests' => [
        ]
    ]
];

