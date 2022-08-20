<?php

namespace App\Services\Customers;

use App\Repositories\Interfaces\ICustomerRepository;
use Exception;
use Throwable;

class CreateCustomerService
{
    private ICustomerRepository $customer_repository;

    public function __construct(
        ICustomerRepository $customer_repository
    )
    {
        $this->customer_repository = $customer_repository;
    }

    /**
     * @throws Throwable
     */
    public function execute(array $data): array
    {
        $customer = $this->customer_repository->create($data);
        throw_unless($customer, new Exception('Erro ao criar o Cliente', 500)); //TODO enviar somente um token para o front

        return $customer->toArray();
    }
}
