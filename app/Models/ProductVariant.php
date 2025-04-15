<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductVariant extends Model
{
    use SoftDeletes;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class)->withTrashed();
    }

    public function values(): BelongsToMany
    {
        return $this->belongsToMany(
            ProductOptionValue::class,
            'product_option_value_product_variant',
            'variant_id',
            'value_id'
        )->withTimestamps();
    }

    public function inStock(): Attribute
    {
        return Attribute::get(fn () => $this->stock > 0);
    }

    public function priceFormatted(): Attribute
    {
        return Attribute::get(function () {
            return number_format($this->price, 2);
        });
    }
}
