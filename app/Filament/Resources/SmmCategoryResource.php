<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SmmCategoryResource\Pages;
use App\Filament\Resources\SmmCategoryResource\RelationManagers;
use App\Models\SmmCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rules\In;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
class SmmCategoryResource extends Resource
{
    protected static ?string $model = SmmCategory::class;
    protected static ?string $navigationLabel = 'Danh Mục';
    protected static ?string $navigationGroup = 'SMM';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $sort = 100;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                CuratorPicker::make('image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                CuratorColumn::make('image')
                ->label('Thumbnail')
                ->size(40),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
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
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSmmCategories::route('/'),
            'create' => Pages\CreateSmmCategory::route('/create'),
            'edit' => Pages\EditSmmCategory::route('/{record}/edit'),
        ];
    }
}
