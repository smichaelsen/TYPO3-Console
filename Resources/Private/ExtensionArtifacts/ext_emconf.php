<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'TYPO3 Console',
  'description' => 'A reliable and powerful command line interface for TYPO3 CMS',
  'category' => 'cli',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'author' => 'Helmut Hummel',
  'author_email' => 'info@helhum.io',
  'author_company' => 'helhum.io',
  'version' => '5.0.0',
  'constraints' => [
    'depends' => [
      'php' => '7.0.0-7.1.99',
      'typo3' => '8.7.0-8.7.99',
    ],
    'conflicts' => [
        'dbal' => '',
    ],
    'suggests' => [
    ],
  ],
];
