<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PopupResource\Pages;
use App\Models\Popup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PopupResource extends Resource
{
    protected static ?string $model = Popup::class;

    protected static ?string $navigationIcon = 'heroicon-o-window';

    protected static ?string $navigationGroup = 'Cài đặt';

    protected static ?string $navigationLabel = 'Popup';

    protected static ?string $modelLabel = 'Popup';

    protected static ?string $pluralModelLabel = 'Popup';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin popup')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Tiêu đề')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('subtitle')
                            ->label('Tiêu đề phụ')
                            ->maxLength(255),

                        Forms\Components\RichEditor::make('content')
                            ->label('Nội dung')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                            ])
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('button_text')
                            ->label('Text nút')
                            ->maxLength(100),

                        Forms\Components\TextInput::make('button_url')
                            ->label('URL nút')
                            ->url()
                            ->maxLength(255),

                        Forms\Components\FileUpload::make('image')
                            ->label('Ảnh')
                            ->image()
                            ->disk('public_assets')
                            ->directory('images/popups'),
                    ]),

                Forms\Components\Section::make('Badge')
                    ->schema([
                        Forms\Components\TextInput::make('badge_1')
                            ->label('Badge 1')
                            ->maxLength(100),

                        Forms\Components\TextInput::make('badge_2')
                            ->label('Badge 2')
                            ->maxLength(100),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Thời gian hiển thị')
                    ->schema([
                        Forms\Components\DatePicker::make('start_date')
                            ->label('Ngày bắt đầu'),

                        Forms\Components\DatePicker::make('end_date')
                            ->label('Ngày kết thúc'),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Kích hoạt')
                            ->default(true),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Ảnh')
                    ->disk('public_assets'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Tiêu đề')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('subtitle')
                    ->label('Tiêu đề phụ')
                    ->limit(30),

                Tables\Columns\TextColumn::make('start_date')
                    ->label('Bắt đầu')
                    ->date('d/m/Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('end_date')
                    ->label('Kết thúc')
                    ->date('d/m/Y')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Kích hoạt')
                    ->boolean(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Cập nhật')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Kích hoạt'),
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
            ->defaultSort('updated_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPopups::route('/'),
            'create' => Pages\CreatePopup::route('/create'),
            'edit' => Pages\EditPopup::route('/{record}/edit'),
        ];
    }
}
