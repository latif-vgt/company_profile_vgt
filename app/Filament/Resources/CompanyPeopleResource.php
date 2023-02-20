<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\CompanyPeople;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CompanyPeopleResource\Pages;
use App\Filament\Resources\CompanyPeopleResource\RelationManagers;

class CompanyPeopleResource extends Resource
{
    protected static ?string $model = CompanyPeople::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),

                Select::make('role_company_people_id')->required()->relationship('role_company_people', 'name'),

                FileUpload::make('photo')->disk('company-people')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),

                TextColumn::make('role_company_people.name'),

                ImageColumn::make('photo')->disk('company-people')
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
            'index' => Pages\ListCompanyPeople::route('/'),
            'create' => Pages\CreateCompanyPeople::route('/create'),
            'edit' => Pages\EditCompanyPeople::route('/{record}/edit'),
        ];
    }
}
