<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia as SpatieHasMedia;
use Spatie\Translatable\HasTranslations;

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
            'extra' => AsCollection::class,
        ];
    }

    public function images(): MorphMany
    {
        return $this->media()->where('collection_name', config('media.collection'));
    }
}
