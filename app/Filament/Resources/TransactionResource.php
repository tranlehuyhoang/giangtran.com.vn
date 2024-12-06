<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;
    protected static ?string $navigationLabel = 'Lịch Sử Giao Dịch';
    protected static ?string $navigationGroup = 'Người Dùng';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bank_brand_name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('account_number')
                    ->required()
                    ->maxLength(20),
                Forms\Components\DateTimePicker::make('transaction_date')
                    ->required(),
                Forms\Components\TextInput::make('amount_out')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('amount_in')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('accumulated')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\Textarea::make('transaction_content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('reference_number')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('code')
                    ->maxLength(20)
                    ->default(null),
                Forms\Components\TextInput::make('sub_account')
                    ->maxLength(20)
                    ->default(null),
                Forms\Components\TextInput::make('bank_account_id')
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bank_brand_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('account_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transaction_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount_out')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount_in')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('accumulated')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('reference_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub_account')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bank_account_id')
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
