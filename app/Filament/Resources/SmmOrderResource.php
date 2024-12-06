<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SmmOrderResource\Pages;
use App\Filament\Resources\SmmOrderResource\RelationManagers;
use App\Models\SmmOrder;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class SmmOrderResource extends Resource
{
    protected static ?string $model = SmmOrder::class;
    protected static ?string $navigationLabel = 'Đơn Hàng';
    protected static ?string $navigationGroup = 'SMM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->label('ID Người Dùng')
                    ->numeric(),
                Forms\Components\TextInput::make('smm_service_id')
                    ->required()
                    ->label('ID Dịch Vụ')
                    ->numeric(),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->label('Số Lượng')
                    ->numeric(),
                Forms\Components\TextInput::make('total_price')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->label('Trạng Thái')
                    ->maxLength(255),
                Forms\Components\TextInput::make('unit_price')
                    ->required()
                    ->label('Giá Đơn Vị')
                    ->numeric(),
                Forms\Components\DateTimePicker::make('start_count')
                    ->required()
                    ->label('Thời Gian Khởi Tạo')
                    ->default(now()),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->label('Link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('remains')
                    ->required()
                    ->label('Số Lượng Còn Lại')
                    ->numeric(),
                Forms\Components\TextInput::make('payment_method')
                    ->required()
                    ->label('Phương Thức Thanh Toán')
                    ->maxLength(255),
                Forms\Components\TextInput::make('payment_status')
                    ->required()
                    ->label('Trạng Thái Thanh Toán')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->name('user.name')
                    ->numeric()
                    ->sortable()
                    ->label('ID Người Dùng'),
                Tables\Columns\TextColumn::make('smm_service_id')
                    ->name('service.name')
                    ->numeric()
                    ->sortable()
                    ->label('ID Dịch Vụ'),
                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable()
                    ->label('Số Lượng'),
                    Tables\Columns\TextColumn::make('unit_price')
                        ->numeric()
                    ->sortable()
                    ->label('Giá Đơn Vị'),
                Tables\Columns\TextColumn::make('total_price')
                    ->numeric()
                    ->sortable()
                    ->label('Tổng Giá'),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->label('Trạng Thái'),
                Tables\Columns\TextColumn::make('start_count')
                    ->sortable()
                    ->label('Số lượng khởi tạo'),
                    Tables\Columns\TextColumn::make('remains')
                        ->numeric()
                            ->sortable()
                        ->label('Số Lượng Còn Lại'),
                Tables\Columns\TextColumn::make('link')
                    ->searchable()
                    ->label('Link'),
                Tables\Columns\TextColumn::make('payment_method')
                    ->searchable()
                    ->label('Phương Thức Thanh Toán'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('payment_status')
                    ->searchable()
                    ->label('Trạng Thái Thanh Toán'),
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
            'index' => Pages\ListSmmOrders::route('/'),
            'create' => Pages\CreateSmmOrder::route('/create'),
            'edit' => Pages\EditSmmOrder::route('/{record}/edit'),
        ];
    }
}
