<?php

declare(strict_types=1);

namespace App\Customer\Http\Controllers;

use App\Base\Http\Controllers\Controller;
use App\Customer\Http\Requests\CustomerRequest;
use App\Customer\Services\CustomerService;
use Illuminate\Http\JsonResponse;

class CustomerController extends Controller
{

    public function __construct(
        private readonly CustomerService $customerService,
    )
    {
    }

    public function store(CustomerRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $response = $this->customerService->createCustomerAndUser($validated, $request->only('password'));

        return response()->json($response, 201);

    }

}