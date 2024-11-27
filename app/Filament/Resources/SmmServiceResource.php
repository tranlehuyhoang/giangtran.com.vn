<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SmmServiceResource\Pages;
use App\Filament\Resources\SmmServiceResource\RelationManagers;
use App\Models\SmmCategory;
use App\Models\SmmService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SmmServiceResource extends Resource
{
    protected static ?string $model = SmmService::class;
    protected static ?string $navigationLabel = 'Dịch vụ';
    protected static ?string $navigationGroup = 'SMM';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('smmcategory_id')
                ->required()
                ->label('Danh Mục')
                ->options(SmmCategory::all()->pluck('name', 'id'))
                ->placeholder('Chọn danh mục Smm'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Tên dịch vụ')
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->label('Giá dịch vụ')
                    ->numeric()
                    ->prefix('VNĐ'),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('min')
                    ->required()
                    ->label('Số lượng tối thiểu')
                    ->numeric(),
                Forms\Components\TextInput::make('max')
                    ->required()
                    ->label('Số lượng tối đa')
                    ->numeric(),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->label('Danh mục')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Tên dịch vụ'),
                Tables\Columns\TextColumn::make('price')
                    ->money('VND')
                    ->label('Giá')
                    ->sortable(),
                Tables\Columns\TextColumn::make('code')
                    ->searchable()
                    ->label('Mã dịch vụ'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Trạng thái'),
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
            'index' => Pages\ListSmmServices::route('/'),
            'create' => Pages\CreateSmmService::route('/create'),
            'edit' => Pages\EditSmmService::route('/{record}/edit'),
        ];
    }
}
