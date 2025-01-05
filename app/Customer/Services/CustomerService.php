<?php

declare(strict_types=1);

namespace App\Customer\Services;

use App\Customer\Interface\CustomerRepositoryInterface;
use App\Customer\Interface\CustomerUserRepositoryInterface;
use App\Customer\Models\Customer;
use App\Customer\Models\CustomerUser;
use App\Role\Interface\RoleRepositoryInterface;
use App\User\Interface\UserRepositoryInterface;
use App\User\Models\User;

readonly class CustomerService
{
    public function __construct(
        private CustomerRepositoryInterface     $customerRepository,
        private RoleRepositoryInterface         $rolesRepository,
        private UserRepositoryInterface         $usersRepository,
        private CustomerUserRepositoryInterface $customerUserRepository
    )
    {
    }

    public function createCustomerAndUser(array $customerData, array $userData): array
    {
        /** @var Customer $newCustomer */
        $newCustomer = $this->customerRepository->save(new Customer($customerData));

        $role = $this->rolesRepository->getRole('admin');

        /** @var User $newUser */
        $newUser = $this->usersRepository->save(new User([
            'name' => $newCustomer->name,
            'email' => $newCustomer->email,
            'password' => bcrypt($userData['password']),
            'role_id' => $role->id,
        ]));

        $this->customerUserRepository->save(new CustomerUser([
            'user_id' => $newUser->id,
            'customer_id' => $newCustomer->id,
            'created_by' => auth()->id(),
        ]));

        return ['customer' => $newCustomer, 'user' => $newUser];
    }
}