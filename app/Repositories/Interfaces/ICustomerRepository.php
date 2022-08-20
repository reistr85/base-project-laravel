<?php

namespace App\Repositories\Interfaces;

use App\Models\Customer;

interface ICustomerRepository
{
    public function create(array $data): Customer;
    public function findByEmail(string $email): ?Customer;
}
