<?php

namespace App\Filament\Resources\SettingResource\Pages;

use App\Filament\Resources\SettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetting extends EditRecord
{
    protected static string $resource = SettingResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if ($data['type'] === 'boolean' && isset($data['boolean_value'])) {
            $data['value'] = $data['boolean_value'] ? '1' : '0';
        } elseif ($data['type'] === 'integer' && isset($data['integer_value'])) {
            $data['value'] = (string) $data['integer_value'];
        } elseif ($data['type'] === 'image' && isset($data['image_value'])) {
            $imageValue = $data['image_value'];
            if (is_array($imageValue)) {
                $data['value'] = !empty($imageValue) ? reset($imageValue) : '';
            } else {
                $data['value'] = $imageValue ?: '';
            }
        }

        unset($data['boolean_value'], $data['integer_value'], $data['image_value']);

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
