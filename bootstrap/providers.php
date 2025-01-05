<?php

return [
    App\Base\Providers\AppServiceProvider::class,
    App\Document\Providers\DocumentServiceProviders::class,
    App\Role\Providers\RoleServiceProviders::class,
    App\Permission\Providers\PermissionServiceProviders::class,
    App\RolePermission\Providers\RolePermissionServiceProviders::class,
    App\State\Providers\StateServiceProviders::class,
    App\City\Providers\CityServiceProviders::class,
    App\Customer\Providers\CustomerServiceProviders::class,
    App\User\Providers\UserProviders::class,
];
