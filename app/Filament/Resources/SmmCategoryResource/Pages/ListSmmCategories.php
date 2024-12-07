<?php

namespace App\Filament\Resources\SmmCategoryResource\Pages;

use App\Filament\Resources\SmmCategoryResource;
use App\Models\SmmCategory;
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
                    $collection->transform(function ($item) {
                        return $item;
                    });
                    foreach ($collection as $item) {
                        SmmCategory::create($item->toArray()); // Chuyển đổi item thành mảng
                    }
            }),
            Actions\CreateAction::make(),
        ];
    }
}
