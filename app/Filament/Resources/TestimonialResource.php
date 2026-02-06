<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationGroup = 'Đối tác';

    protected static ?string $navigationLabel = 'Đánh giá';

    protected static ?string $modelLabel = 'Đánh giá';

    protected static ?string $pluralModelLabel = 'Đánh giá';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin khách hàng')
                    ->schema([
                        Forms\Components\TextInput::make('client_name')
                            ->label('Tên khách hàng')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('client_position')
                            ->label('Chức vụ')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('client_company')
                            ->label('Công ty')
                            ->maxLength(255),

                        Forms\Components\FileUpload::make('client_avatar')
                            ->label('Ảnh đại diện')
                            ->image()
                            ->disk('public_assets')
                            ->directory('images/testimonials')
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1'),
                    ]),

                Forms\Components\Section::make('Nội dung đánh giá')
                    ->schema([
                        Forms\Components\Textarea::make('content')
                            ->label('Nội dung')
                            ->required()
                            ->rows(4)
                            ->maxLength(1000),

                        Forms\Components\Select::make('rating')
                            ->label('Đánh giá')
                            ->options([
                                1 => '1 sao',
                                2 => '2 sao',
                                3 => '3 sao',
                                4 => '4 sao',
                                5 => '5 sao',
                            ])
                            ->default(5),
                    ]),

                Forms\Components\Section::make('Cài đặt')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->label('Thứ tự')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Kích hoạt')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('client_avatar')
                    ->label('Ảnh')
                    ->disk('public_assets')
                    ->circular(),

                Tables\Columns\TextColumn::make('client_name')
                    ->label('Tên khách hàng')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('client_company')
                    ->label('Công ty')
                    ->searchable(),

                Tables\Columns\TextColumn::make('content')
                    ->label('Nội dung')
                    ->limit(50),

                Tables\Columns\TextColumn::make('rating')
                    ->label('Đánh giá')
                    ->formatStateUsing(fn (int $state): string => str_repeat('⭐', $state)),

                Tables\Columns\TextColumn::make('order')
                    ->label('Thứ tự')
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
                Tables\Filters\SelectFilter::make('rating')
                    ->label('Đánh giá')
                    ->options([
                        1 => '1 sao',
                        2 => '2 sao',
                        3 => '3 sao',
                        4 => '4 sao',
                        5 => '5 sao',
                    ]),
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
            ->defaultSort('order')
            ->reorderable('order');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
