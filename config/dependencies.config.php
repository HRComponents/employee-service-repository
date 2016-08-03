<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/
 */

use CodingMatters\Employee\Service\EmployeeListService;
use CodingMatters\Employee\Model\EmployeeRepository;
use CodingMatters\Employee\Factory;

return [
    'invokables'            => [],
    'factories'             => [
        EmployeeRepository::class   => Factory\EmployeeRepositoryFactory::class,
        EmployeeListService::class => Factory\EmployeeListServiceFactory::class
    ],
    'services'              => [],
    'abstract_factories'    => [],
    'delegators'            => [],
    'shared'                => [],
    'shared_by_default'     => true
];
