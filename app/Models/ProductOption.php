<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia as SpatieHasMedia;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class ProductOption extends Model implements SpatieHasMedia
{
    use HasMedia, HasTranslations;

    public array $translatable = ['name'];

    protected $casts = [
        'name' => AsArrayObject::class,
        'label' => AsArrayObject::class,
        'shared' => 'boolean',
    ];

    public function scopeShared(Builder $builder): Builder
    {
        return $builder->where('shared', '=', true);
    }

    public function values(): HasMany
    {
        return $this->hasMany(ProductOptionValue::class)->orderBy('position');
    }
}
