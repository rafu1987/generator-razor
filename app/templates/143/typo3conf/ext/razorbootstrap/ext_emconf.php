<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Razor Bootstrap',
    'description' => 'Installs the complete Razor framework',
    'category' => 'misc',
    'author' => 'Raphael Zschorsch',
    'author_email' => 'rafu1987@gmail.com',
    'state' => 'stable',
    'version' => '14.3.0',
    'constraints' => [
        'depends' => [
            'extbase' => '14.3.0-14.99.99',
            'fluid' => '14.3.0-14.99.99',
            'typo3' => '14.3.0-14.99.99',
            'php' => '8.2.0-8.5.99',
            'razor' => '14.3.0-14.99.99',
            'razorce' => '14.3.0-14.99.99',
            'razornews' => '14.3.0-14.99.99',
            'razormin' => '14.3.0-14.99.99',
            'razorcookieconsent' => '14.3.0-14.99.99',
            'razorsite' => '14.3.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'RZ\\Razorbootstrap\\' => 'Classes',
        ],
    ],
];