<?php

namespace App\Models;

use App\Traits\HasMedia;
use App\Enums\ProductStatus;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Eloquent\Builders\ProductQueryBuilder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia as SpatieHasMedia;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model implements SpatieHasMedia
{
    use HasMedia, HasTranslations, SoftDeletes;

    public array $translatable = [
        'name', 'description', 'feature', 'price', 'size', 'body',
    ];

    protected function casts(): array
    {
        return [
            'name' => AsCollection::class,
            'description' => AsCollection::class,
            'feature' => AsCollection::class,
            'price' => AsCollection::class,
            'size' => AsCollection::class,
            'body' => AsCollection::class,
            'status' => ProductStatus::class,
            'extra' => AsCollection::class,
        ];
    }

    public function newEloquentBuilder($query): ProductQueryBuilder
    {
        return new ProductQueryBuilder($query);
    }

    public function url(): Attribute
    {
        return Attribute::get(fn () => route('products.show', $this));
    }

    public function images(): MorphMany
    {
        return $this->media()->where('collection_name', config('media.collection'));
    }

    public function primaryImageUrl(): Attribute
    {
        return Attribute::get(function () {
            $primary = $this->images()->where('custom_properties->primary', true)->first();

            if (! $primary) {
                return null;
            }

            return $primary->hasGeneratedConversion('medium')
                ? $primary->getUrl('medium')
                : $primary->getUrl();
        });
    }

    public function price(): Attribute
    {
        return Attribute::get(function () {
            $this->load('variant');

            return $this->variant?->price_formatted;
        });
    }

    public function featureFormatted(): Attribute
    {
        return Attribute::get(function () {
            return array_filter(explode("\n", $this->feature));
        });
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function variant(): HasOne
    {
        return $this->hasOne(ProductVariant::class);
    }

    protected function hasVariants(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->variants()->count() > 1,
        );
    }

    public function productOptions(): BelongsToMany
    {
        return $this->belongsToMany(ProductOption::class, 'product_product_option')
            ->withPivot(['position'])
            ->orderByPivot('position');
    }
}
