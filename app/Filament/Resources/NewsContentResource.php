<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\NewsContent;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsContentResource\Pages;
use App\Filament\Resources\NewsContentResource\RelationManagers;

class NewsContentResource extends Resource
{
    protected static ?string $model = NewsContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(3)
                    ->maxLength(255),

                FileUpload::make('image')->disk('news-content-image'),

                Select::make('published')->required()
                    ->options([
                        0 => 'No',
                        1 => 'Yes'
                ]),

                Textarea::make('information')->rows(10)->cols(20),

                Select::make('news_category_id')->required()->relationship('news_category', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListNewsContents::route('/'),
            'create' => Pages\CreateNewsContent::route('/create'),
            'edit' => Pages\EditNewsContent::route('/{record}/edit'),
        ];
    }
}
