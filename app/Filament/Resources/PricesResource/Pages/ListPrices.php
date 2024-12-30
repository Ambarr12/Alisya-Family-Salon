<?php

namespace App\Filament\Resources\PricesResource\Pages;

use App\Filament\Resources\PricesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrices extends ListRecords
{
    protected static string $resource = PricesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
