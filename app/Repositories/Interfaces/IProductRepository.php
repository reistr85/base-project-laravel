<?php

namespace App\Repositories\Interfaces;

interface IProductRepository
{
    public function findAll();
    public function findById(int $id);
}
