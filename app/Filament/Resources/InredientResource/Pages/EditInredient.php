<?php

namespace App\Filament\Resources\InredientResource\Pages;

use App\Filament\Resources\InredientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInredient extends EditRecord
{
    protected static string $resource = InredientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
