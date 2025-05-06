<?php

namespace App\Filament\Resources\CategoriaResource\Pages;

use App\Filament\Resources\CategoriaResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;


class EditCategoria extends EditRecord
{
    protected static string $resource = CategoriaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): Notification|null
    {
        return Notification::make()
            ->title('Categoria actualizada correctamente')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
            ->successNotification(
                Notification::make()
            ->title('Categoria eliminada')
            ->body('La categoria ha sido eliminada correctamente')
            ->success()
            ),
        ];
    }


}
