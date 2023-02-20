<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use App\Models\PictureInformationContent;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PictureInformationContentResource\Pages;
use App\Filament\Resources\PictureInformationContentResource\RelationManagers;

class PictureInformationContentResource extends Resource
{
    protected static ?string $model = PictureInformationContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('key')->required(),

                FileUpload::make('picture')->disk('picture-information-content')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key'),

                ImageColumn::make('picture')->disk('picture-information-content')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPictureInformationContents::route('/'),
            'create' => Pages\CreatePictureInformationContent::route('/create'),
            'edit' => Pages\EditPictureInformationContent::route('/{record}/edit'),
        ];
    }
}
