<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ProductStatus: string implements HasColor, HasLabel
{
    case Draft = 'draft';
    case Published = 'published';
    case Deleted = 'deleted';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => '草稿',
            self::Published => '已发布',
            self::Deleted => '已删除',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Draft => 'warning',
            self::Published => 'success',
            self::Deleted => 'danger',
        };
    }
}
