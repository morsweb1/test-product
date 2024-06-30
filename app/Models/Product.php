<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function regions(): BelongsToMany
    {
        return $this->belongsToMany(Region::class, 'product_region', 'product_id', 'region_id');
    }
}
