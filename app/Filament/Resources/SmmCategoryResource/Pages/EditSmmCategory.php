<?php

namespace App\Filament\Resources\SmmCategoryResource\Pages;

use App\Filament\Resources\SmmCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmmCategory extends EditRecord
{
    protected static string $resource = SmmCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
