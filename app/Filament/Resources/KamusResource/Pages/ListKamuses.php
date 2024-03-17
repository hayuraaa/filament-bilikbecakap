<?php

namespace App\Filament\Resources\KamusResource\Pages;

use App\Filament\Resources\KamusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use app\Models\Kamus;
use Illuminate\Contracts\View\View;

class ListKamuses extends ListRecords
{
    protected static string $resource = KamusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getHeader(): ?View
    {
        $data = Actions\CreateAction::make();
        return view('filament.custom.upload-file', compact('data'));
    }

    public $file = '';

    // public function save(){
    //     Kamus::create([
    //         'bahasa melayu' => 'haha',
    //         'bahasa indonesia' => 'yeye',
    //         'audio' => ''
    //     ]);
    // }

}
