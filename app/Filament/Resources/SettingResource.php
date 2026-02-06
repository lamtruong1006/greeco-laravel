<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Cài đặt';

    protected static ?string $navigationLabel = 'Cài đặt hệ thống';

    protected static ?string $modelLabel = 'Cài đặt';

    protected static ?string $pluralModelLabel = 'Cài đặt';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin cài đặt')
                    ->schema([
                        Forms\Components\TextInput::make('key')
                            ->label('Khóa')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('VD: site_name, contact_email, footer_text'),

                        Forms\Components\TextInput::make('label')
                            ->label('Nhãn hiển thị')
                            ->maxLength(255)
                            ->helperText('Tên dễ đọc cho cài đặt này'),

                        Forms\Components\Select::make('type')
                            ->label('Loại dữ liệu')
                            ->options([
                                'text' => 'Văn bản',
                                'textarea' => 'Văn bản dài',
                                'boolean' => 'Đúng/Sai',
                                'integer' => 'Số nguyên',
                                'json' => 'JSON',
                                'image' => 'Hình ảnh',
                            ])
                            ->default('text')
                            ->live(),

                        Forms\Components\Select::make('group')
                            ->label('Nhóm')
                            ->options([
                                'general' => 'Chung',
                                'contact' => 'Liên hệ',
                                'social' => 'Mạng xã hội',
                                'seo' => 'SEO',
                                'mail' => 'Email',
                                'other' => 'Khác',
                            ])
                            ->default('general'),

                        Forms\Components\Textarea::make('value')
                            ->label('Giá trị')
                            ->rows(4)
                            ->columnSpanFull()
                            ->visible(fn (Forms\Get $get): bool => in_array($get('type'), ['text', 'textarea', 'json', null, ''])),

                        Forms\Components\Toggle::make('boolean_value')
                            ->label('Giá trị')
                            ->visible(fn (Forms\Get $get): bool => $get('type') === 'boolean')
                            ->afterStateHydrated(function (Forms\Components\Toggle $component, $state, $record) {
                                if ($record && $record->type === 'boolean') {
                                    $component->state((bool) $record->value);
                                }
                            }),

                        Forms\Components\TextInput::make('integer_value')
                            ->label('Giá trị')
                            ->numeric()
                            ->visible(fn (Forms\Get $get): bool => $get('type') === 'integer')
                            ->afterStateHydrated(function (Forms\Components\TextInput $component, $state, $record) {
                                if ($record && $record->type === 'integer') {
                                    $component->state($record->value);
                                }
                            }),

                        Forms\Components\FileUpload::make('image_value')
                            ->label('Giá trị')
                            ->image()
                            ->disk('public_assets')
                            ->directory('images/settings')
                            ->visible(fn (Forms\Get $get): bool => $get('type') === 'image')
                            ->afterStateHydrated(function (Forms\Components\FileUpload $component, $state, $record) {
                                if ($record && $record->type === 'image' && $record->value) {
                                    $component->state([$record->value]);
                                }
                            }),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->label('Khóa')
                    ->searchable()
                    ->sortable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('label')
                    ->label('Nhãn')
                    ->searchable(),

                Tables\Columns\TextColumn::make('value')
                    ->label('Giá trị')
                    ->limit(50),

                Tables\Columns\TextColumn::make('type')
                    ->label('Loại')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match($state) {
                        'text' => 'Văn bản',
                        'textarea' => 'Văn bản dài',
                        'boolean' => 'Đúng/Sai',
                        'integer' => 'Số nguyên',
                        'json' => 'JSON',
                        'image' => 'Hình ảnh',
                        default => $state,
                    }),

                Tables\Columns\TextColumn::make('group')
                    ->label('Nhóm')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match($state) {
                        'general' => 'Chung',
                        'contact' => 'Liên hệ',
                        'social' => 'Mạng xã hội',
                        'seo' => 'SEO',
                        'mail' => 'Email',
                        'other' => 'Khác',
                        default => $state,
                    }),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Cập nhật')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->label('Nhóm')
                    ->options([
                        'general' => 'Chung',
                        'contact' => 'Liên hệ',
                        'social' => 'Mạng xã hội',
                        'seo' => 'SEO',
                        'mail' => 'Email',
                        'other' => 'Khác',
                    ]),
                Tables\Filters\SelectFilter::make('type')
                    ->label('Loại')
                    ->options([
                        'text' => 'Văn bản',
                        'textarea' => 'Văn bản dài',
                        'boolean' => 'Đúng/Sai',
                        'integer' => 'Số nguyên',
                        'json' => 'JSON',
                        'image' => 'Hình ảnh',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('group');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
