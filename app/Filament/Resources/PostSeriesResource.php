<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostSeriesResource\Pages;
use App\Filament\Resources\PostSeriesResource\RelationManagers;
use App\Models\PostSeries;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostSeriesResource extends Resource
{
    protected static ?string $model = PostSeries::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('post_id')
                    ->required(),
                Forms\Components\TextInput::make('series_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('post_id'),
                Tables\Columns\TextColumn::make('series_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPostSeries::route('/'),
            'create' => Pages\CreatePostSeries::route('/create'),
            'view' => Pages\ViewPostSeries::route('/{record}'),
            'edit' => Pages\EditPostSeries::route('/{record}/edit'),
        ];
    }    
}
