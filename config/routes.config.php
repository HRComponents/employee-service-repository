<?php

/**
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://zendframework.github.io/zend-router/routing/
 */

use Zend\Router\Http\Literal;
use Employee\Controller;

return [
    'employees'          => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/employees',
            'defaults'  => [
                'controller'    => Controller\PageController::class,
                'action'        => 'index'
            ]
        ]
    ]
];
