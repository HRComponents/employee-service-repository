<?php

$path = __DIR__ . '/../templates';

return [
    // Zend Framework Configuration
    'view_manager' => [       
        'template_map' => [
            'new-employee'  => $path . '/employee/modal/add.phtml'
        ],
        'template_path_stack' => [
            'employee' =>  __DIR__ . '/../templates',
        ],
    ],
    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
