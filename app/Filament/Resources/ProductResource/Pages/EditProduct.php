<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\Radio;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Facades\FilamentIcon;
use App\Filament\Resources\ProductResource;

class EditProduct extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ProductResource::class;

    public static bool $formActionsAreSticky = true;

    public function getTitle(): string
    {
        return __('products.pages.edit.title');
    }

    public static function getNavigationLabel(): string
    {
        return __('products.pages.edit.title');
    }

    public static function getNavigationIcon(): ?string
    {
        return FilamentIcon::resolve('lunar::basic-information');
    }

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            Actions\EditAction::make('update_status')
                ->label(
                    __('products.actions.edit_status.label')
                )
                ->modalHeading(
                    __('products.actions.edit_status.heading')
                )
                ->record(
                    $this->record
                )->form([
                    Radio::make('status')
                        ->label(__('products.form.status.label'))
                        ->options([
                            'published' => __('products.form.status.options.published.label'),
                            'draft' => __('products.form.status.options.draft.label'),
                        ])
                        ->descriptions([
                            'published' => __('products.form.status.options.published.description'),
                            'draft' => __('products.form.status.options.draft.description'),
                        ])->live(),
                ]),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
