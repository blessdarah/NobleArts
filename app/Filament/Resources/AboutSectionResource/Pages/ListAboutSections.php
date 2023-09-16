<?php

namespace App\Filament\Resources\AboutSectionResource\Pages;

use App\Filament\Resources\AboutSectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutSections extends ListRecords
{
    protected static string $resource = AboutSectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
