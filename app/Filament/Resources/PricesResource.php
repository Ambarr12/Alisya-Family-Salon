<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Prices;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PricesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PricesResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class PricesResource extends Resource
{
    protected static ?string $model = Prices::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('product_id')
                    ->label("Produk")
                    ->options(Product::pluck("name", "id"))
                    ->required()
                    ->searchable(),
                Select::make('price_type')
                    ->label("Tipe Produk")
                    ->options([
                        "one" => "Product One",
                        "two" => "Product Two"
                    ])
                    ->required(),
                TextInput::make('name')->placeholder("ex: Pendek Bob")->required(),
                TextInput::make('price')->placeholder("ex: 10000")->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name")->label("Product")->sortable()->searchable(),
                TextColumn::make('price_type')->sortable()->searchable(),
                TextColumn::make('price')->sortable(),
                TextColumn::make('created_at')->sortable(),
                TextColumn::make('updated_at')->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrices::route('/'),
            'create' => Pages\CreatePrices::route('/create'),
            'edit' => Pages\EditPrices::route('/{record}/edit'),
        ];
    }
}
