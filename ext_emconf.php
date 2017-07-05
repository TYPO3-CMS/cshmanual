<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Help>TYPO3 Manual',
    'description' => 'Shows TYPO3 inline user manual.',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '8.7.5',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.1.99',
            'typo3' => '8.7.5',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
