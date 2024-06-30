<?php

namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface
{
    public function createOrUpdate(array $data);
}
