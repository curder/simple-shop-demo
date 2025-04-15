<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Support\Facades\FilamentIcon;
use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\ManageRelatedRecords;

class ManageProductVariants extends ManageRelatedRecords
{
    protected static string $resource = ProductResource::class;

    protected static string $relationship = 'variants';

    public static function getNavigationIcon(): ?string
    {
        return FilamentIcon::resolve('lunar::product-variants');
    }

    public static function shouldRegisterNavigation(array $parameters = []): bool
    {
        return config('lunar.panel.enable_variants', true);
    }

    public static function canAccess(array $parameters = []): bool
    {
        if (! config('lunar.panel.enable_variants', true)) {
            return false;
        }

        return parent::canAccess($parameters);
    }

    public function getTitle(): string
    {
        return __('products.pages.variants.label');
    }

    public static function getNavigationLabel(): string
    {
        return __('products.pages.variants.label');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ProductResource\Widgets\ProductOptionsWidget::class,
        ];
    }
}
