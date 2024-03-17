<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KamusResource\Pages;
use App\Filament\Resources\KamusResource\RelationManagers;
use App\Models\Kamus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KamusResource extends Resource
{
    protected static ?string $model = Kamus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('bahasa melayu')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('bahasa indonesia')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('audio')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bahasa melayu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bahasa indonesia')
                    ->searchable(),
                Tables\Columns\TextColumn::make('audio'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            
            // ->headerActions([
            //     Tables\Actions\CreateAction::make(),
            // ])
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
            'index' => Pages\ListKamuses::route('/'),
            'create' => Pages\CreateKamus::route('/create'),
            'edit' => Pages\EditKamus::route('/{record}/edit'),
        ];
    }
}
