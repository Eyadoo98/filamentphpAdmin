<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomViewResource\Pages;
use App\Filament\Resources\CustomViewResource\RelationManagers;
use App\Models\Country;
use App\Models\CustomView;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomViewResource extends Resource
{
    protected static ?string $model = CustomView::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Custom View';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListCustomViews::route('/'),
            'create' => Pages\CreateCustomView::route('/create'),
            'edit' => Pages\EditCustomView::route('/{record}/edit'),
        ];
    }
}
