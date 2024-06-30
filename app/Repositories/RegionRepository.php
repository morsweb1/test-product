<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Region;
use App\Repositories\Interfaces\RegionRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class RegionRepository extends CommonRepository implements RegionRepositoryInterface
{

    public function getQuery(): Builder
    {
        return Region::query();
    }

    public function createOrUpdate(Product $product, array $data)
    {
        foreach ($data as $regionId => $price) {

            $region = Region::firstOrCreate(
                ['id' => $regionId],
                ['id' => $regionId],
            );

            $product->regions()->attach($region->id,
                [
                    'price_purchase' => $price['price_purchase'],
                    'price_selling' => $price['price_selling'],
                    'price_discount' => $price['price_discount'],
                ]
            );
        }
    }
}
