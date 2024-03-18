<?php

namespace App\Filament\Resources\PembelajaranResource\Pages;

use App\Filament\Resources\PembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPembelajarans extends ListRecords
{
    protected static string $resource = PembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
