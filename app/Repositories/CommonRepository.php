<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

abstract class CommonRepository
{
    abstract public function getQuery(): Builder;

    public function all(): Collection
    {
        return $this->getQuery()->get();
    }

    public function get(string|int $id)
    {
        return $this->getQuery()->findOrFail($id);
    }
}
