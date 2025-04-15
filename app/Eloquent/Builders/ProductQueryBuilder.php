<?php

namespace App\Eloquent\Builders;

use App\Enums\ProductStatus;
use Illuminate\Database\Eloquent\Builder;

class ProductQueryBuilder extends Builder
{
    public function published(): self
    {
        return $this->where('status', ProductStatus::Published->value);
    }
}