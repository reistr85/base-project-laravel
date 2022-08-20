<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\Interfaces\ICustomerRepository;

class CustomerRepository implements ICustomerRepository
{
    private Customer $model;

    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    public function create(array $data): Customer
    {
        return $this->model->create($data);
    }

    public function findByEmail(string $email): ?Customer
    {
        return $this->model->whereEmail($email)->first();
    }
}
