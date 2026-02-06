<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $navigationGroup = 'Dịch vụ';

    protected static ?string $navigationLabel = 'Dịch vụ tư vấn';

    protected static ?string $modelLabel = 'Dịch vụ';

    protected static ?string $pluralModelLabel = 'Dịch vụ';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('service_tabs')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Thông tin chung')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Tên dịch vụ')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Đường dẫn')
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->helperText('Tự động tạo nếu để trống'),

                                Forms\Components\TextInput::make('icon')
                                    ->label('Icon')
                                    ->placeholder('images/icon-service-1.svg')
                                    ->maxLength(255),

                                Forms\Components\Textarea::make('short_description')
                                    ->label('Mô tả ngắn')
                                    ->rows(3)
                                    ->maxLength(500),

                                Forms\Components\RichEditor::make('content')
                                    ->label('Nội dung chi tiết')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'h2',
                                        'h3',
                                        'bulletList',
                                        'orderedList',
                                        'link',
                                        'blockquote',
                                        'codeBlock',
                                    ])
                                    ->columnSpanFull(),

                                Forms\Components\FileUpload::make('featured_image')
                                    ->label('Ảnh đại diện')
                                    ->image()
                                    ->disk('public_assets')
                                    ->directory('images/services')
                                    ->imageResizeMode('cover')
                                    ->imageCropAspectRatio('16:9'),

                                Forms\Components\FileUpload::make('gallery')
                                    ->label('Thư viện ảnh')
                                    ->image()
                                    ->disk('public_assets')
                                    ->multiple()
                                    ->directory('images/services/gallery')
                                    ->maxFiles(10),
                            ]),

                        Forms\Components\Tabs\Tab::make('SEO')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->maxLength(70)
                                    ->helperText('Tối đa 70 ký tự'),

                                Forms\Components\Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->rows(3)
                                    ->maxLength(160)
                                    ->helperText('Tối đa 160 ký tự'),

                                Forms\Components\TextInput::make('meta_keywords')
                                    ->label('Meta Keywords')
                                    ->maxLength(255),

                                Forms\Components\FileUpload::make('og_image')
                                    ->label('OG Image')
                                    ->image()
                                    ->disk('public_assets')
                                    ->directory('images/services/og'),
                            ]),

                        Forms\Components\Tabs\Tab::make('Cài đặt')
                            ->schema([
                                Forms\Components\TextInput::make('order')
                                    ->label('Thứ tự')
                                    ->numeric()
                                    ->default(0),

                                Forms\Components\Toggle::make('is_featured')
                                    ->label('Nổi bật')
                                    ->default(false),

                                Forms\Components\Toggle::make('is_active')
                                    ->label('Kích hoạt')
                                    ->default(true),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')
                    ->label('Ảnh')
                    ->disk('public_assets'),

                Tables\Columns\TextColumn::make('name')
                    ->label('Tên dịch vụ')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('short_description')
                    ->label('Mô tả')
                    ->limit(50),

                Tables\Columns\TextColumn::make('order')
                    ->label('Thứ tự')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Nổi bật')
                    ->boolean(),

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
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Nổi bật'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
