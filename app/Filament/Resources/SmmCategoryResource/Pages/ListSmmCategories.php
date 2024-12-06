<?php

namespace App\Filament\Resources\SmmCategoryResource\Pages;

use App\Filament\Resources\SmmCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Collection;
class ListSmmCategories extends ListRecords
{
    protected static string $resource = SmmCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
            ->processCollectionUsing(function (string $modelClass, Collection $collection) {
                // Do some stuff with the collection
                return $collection;
            }),
            Actions\CreateAction::make(),
        ];
    }
}
