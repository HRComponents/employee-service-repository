<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/
 */

use CodingMatters\Employee\Service\EmployeeListServiceInterface;
use CodingMatters\Employee\Model\EmployeeRepositoryInterface;
use CodingMatters\Employee\Factory;

return [
    'invokables'            => [],
    'factories'             => [
        EmployeeRepositoryInterface::class      => Factory\EmployeeRepositoryFactory::class,
        EmployeeListServiceInterface::class     => Factory\EmployeeListServiceFactory::class
    ],
    'services'              => [],
    'abstract_factories'    => [],
    'delegators'            => [],
    'shared'                => [],
    'shared_by_default'     => true
];
