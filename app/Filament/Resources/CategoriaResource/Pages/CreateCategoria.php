<?php

namespace App\Filament\Resources\CategoriaResource\Pages;

use App\Filament\Resources\CategoriaResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Mockery\Matcher\Not;

class CreateCategoria extends CreateRecord
{
    protected static string $resource = CategoriaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): Notification|null
    {
        return Notification::make()
            ->title('Categoria creada correctamente')
            ->success()
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()
                ->label('Registrar'),
            $this->getCreateAnotherFormAction()
                ->label('Registrar y crear otro'),
            $this->getCancelFormAction()
                ->label('Cancelar'),
        ];
    }
}
