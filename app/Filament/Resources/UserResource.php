<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationLabel = 'Người Dùng';
    protected static ?string $navigationGroup = 'Người Dùng';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $sort = 101;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Tên Người Dùng'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->label('Email'),
                Forms\Components\TextInput::make('username')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Tên Đăng Nhập'),
                Forms\Components\Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->label('Quyền'),
                Forms\Components\DateTimePicker::make('email_verified_at')
                    ->label('Thời Gian Xác Thực Email'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn($state) => bcrypt($state))
                    ->dehydrated(fn($state) => filled($state))
                    ->maxLength(255)
                    ->label('Mật Khẩu'),
                Forms\Components\TextInput::make('theme')
                    ->maxLength(255)
                    ->default('default')
                    ->label('Giao Diện'),

                Forms\Components\TextInput::make('theme_color')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Màu Giao Diện'),
                Forms\Components\TextInput::make('ip_address')->label('Địa chỉ IP'),
                Forms\Components\TextInput::make('other_contact_info')->label('Thông tin liên hệ khác'),
                Forms\Components\TextInput::make('device')->label('Thiết bị'),
                Forms\Components\TextInput::make('total_consumption')->numeric()->default(0)->label('Tổng tiêu thụ'),
                Forms\Components\TextInput::make('total_deposit')->numeric()->default(0)->label('Tổng gửi'),
                Forms\Components\Toggle::make('two_factor_auth_status')->default(false)->label('Trạng thái 2FA'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable()
                    ->label('ID'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Tên Người Dùng'),
                Tables\Columns\TextColumn::make('username')
                    ->searchable()
                    ->label('Tên Đăng Nhập'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->label('Email'),
                Tables\Columns\BadgeColumn::make('roles.name')
                    ->label('Quyền'),
                Tables\Columns\TextColumn::make('username')
                    ->searchable()
                    ->label('Tên Đăng Nhập'),
                Tables\Columns\TextColumn::make('balance')
                    ->numeric()
                    ->sortable()
                    ->label('Số Dư'),
                Tables\Columns\TextColumn::make('total_consumption')
                    ->numeric()
                    ->sortable()
                    ->label('Đã Dùng'),
                Tables\Columns\TextColumn::make('total_deposit')
                    ->numeric()
                    ->sortable()
                    ->label('Tổng Nạp'),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Thời Gian Xác Thực Email'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Thời Gian Tạo'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('theme')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)

                    ->label('Giao Diện'),
                Tables\Columns\TextColumn::make('theme_color')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Màu Giao Diện'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
