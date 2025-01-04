<?php

return [
    App\Base\Providers\AppServiceProvider::class,
    App\Documents\Providers\DocumentsServiceProviders::class,
    App\Roles\Providers\RolesServiceProviders::class,
    App\Permissions\Providers\PermissionsServiceProviders::class,
    App\RolePermissions\Providers\RolePermissionsServiceProviders::class,
    App\States\Providers\StatesServiceProviders::class,
    App\Cities\Providers\CitiesServiceProviders::class,
    App\Customers\Providers\CustomersServiceProviders::class,
];
