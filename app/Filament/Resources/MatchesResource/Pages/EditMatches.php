<?php

namespace App\Filament\Resources\MatchesResource\Pages;

use App\Filament\Resources\MatchesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMatches extends EditRecord
{
    protected static string $resource = MatchesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
