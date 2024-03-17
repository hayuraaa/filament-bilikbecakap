<?php

namespace App\Filament\Resources\KamusResource\Pages;

use App\Filament\Resources\KamusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKamus extends EditRecord
{
    protected static string $resource = KamusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
