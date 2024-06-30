<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;

interface RegionRepositoryInterface
{
    public function createOrUpdate(Product $product, array $data);
}
