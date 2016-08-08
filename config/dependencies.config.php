<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/
 */

use CodingMatters\Employee\Service;
use CodingMatters\Employee\Model;
use CodingMatters\Employee\Factory;

return [
    'aliases'               => [
        Model\EmployeeRepositoryInterface::class    => Model\EmployeeRepository::class,
        Service\EmployeeListServiceInterface::class => Service\EmployeeListService::class
    ],
    'invokables'            => [],
    'factories'             => [
        Model\EmployeeRepository::class     => Factory\EmployeeRepositoryFactory::class,
        Service\EmployeeListService::class  => Factory\EmployeeListServiceFactory::class
    ],
    'services'              => [],
    'abstract_factories'    => [],
    'delegators'            => [],
    'shared'                => [],
    'shared_by_default'     => true
];
