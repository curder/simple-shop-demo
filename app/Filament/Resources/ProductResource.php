<?php

namespace App\Filament\Resources;

use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\ProductStatus;
use App\Traits\HasActiveIcon;
use Filament\Resources\Resource;
use Filament\Resources\Pages\Page;
use Awcodes\Shout\Components\Shout;
use Filament\Tables\Columns\Column;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Pages\SubNavigationPosition;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreBulkAction;
use App\Filament\Resources\ProductResource\Pages;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class ProductResource extends Resource
{
    use HasActiveIcon, Translatable;

    protected static ?string $model = Product::class;

    protected static ?string $slug = 'products';

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::End;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Shout::make('product-status')
                    ->columnSpanFull()
                    ->content(
                        __('products.status.unpublished.content')
                    )->type('info')
                    ->visibleOn('edit')
                    ->hidden(fn (?Model $record) => $record?->status == 'published'),

                TextInput::make('sku')
                    ->unique(ignoreRecord: true)
                    ->required(),

                TextInput::make('name')
                    ->label(__('products.name'))
                    ->translatable()
                    ->required(),
                Textarea::make('description')
                    ->label(__('products.description'))
                    ->columnSpanFull()
                    ->rows(4)
                    ->translatable(),
                Textarea::make('feature')
                    ->label(__('products.feature'))
                    ->columnSpanFull()
                    ->rows(4)
                    ->translatable(),
                RichEditor::make('body')
                    ->label(__('products.body'))
                    ->translatable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('status')
                    ->label(__('products.table.status.label'))
                    ->badge()
                    ->getStateUsing(
                        fn (Model $record) => $record->deleted_at ? ProductStatus::Deleted : $record->status
                    ),
                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->collection(config('media.collection'))
                    ->conversion('small')
                    ->limit()
                    ->stacked()
                    ->circular()
                    ->label(''),

                TextColumn::make('name')
                    ->label(__('products.table.name.label'))
                    ->searchable()
                    ->sortable(),

                self::getSkuTableColumn(),

                TextColumn::make('variants_sum_stock')
                    ->label(__('products.table.stock.label'))
                    ->sum('variants', 'stock'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
            'media' => Pages\ManageProductMedia::route('/{record}/media'),
            'variants' => Pages\ManageProductVariants::route('/{record}/variants'),
        ];
    }

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            Pages\EditProduct::class,
            Pages\ManageProductMedia::class,
            Pages\ManageProductVariants::class,
        ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //            MediaRelationManager::class,
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }

    public static function getLabel(): string
    {
        return __('products.label');
    }

    public static function getPluralLabel(): string
    {
        return __('products.plural_label');
    }

    public static function getSkuTableColumn(): Column
    {
        return TextColumn::make('variants.sku')
            ->label(__('products.table.sku.label'))
            ->tooltip(function (TextColumn $column, Model $record): ?string {

                if ($record->variants->count() <= $column->getListLimit()) {
                    return null;
                }

                if ($record->variants->count() > 30) {
                    $record->variants = $record->variants->slice(0, 30);
                }

                return $record->variants
                    ->map(fn ($variant) => $variant->sku)
                    ->implode(', ');
            })
            ->listWithLineBreaks()
            ->limitList(1)
            ->toggleable()
            ->searchable();
    }
}
