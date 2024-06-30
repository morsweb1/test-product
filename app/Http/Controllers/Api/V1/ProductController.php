<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Jobs\Product\CreateOrUpdateJod;

class ProductController extends Controller
{
    public function createOrUpdate(ProductRequest $request)
    {
        CreateOrUpdateJod::dispatch($request->products);
//        $this->productRepository->createOrUpdate($request->products);

        return response()->json(['message' => 'Данные успешно обрабатываются'], 200);
    }
}
