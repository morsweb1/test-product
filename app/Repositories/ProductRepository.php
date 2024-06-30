<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class ProductRepository extends CommonRepository
{
    public function getQuery(): Builder
    {
        return Product::query();
    }

    public function createOrUpdate(array $data)
    {
        foreach ($data as $item) {

            $product = Product::firstOrCreate(
                ['article' => $item['product_id']],
                ['article' => $item['product_id']],
            );

            (new RegionRepository)->createOrUpdate($product, $item['prices']);

        }
    }
}
