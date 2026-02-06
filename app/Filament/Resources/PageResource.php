<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationGroup = 'Nội dung';

    protected static ?string $navigationLabel = 'Trang tĩnh';

    protected static ?string $modelLabel = 'Trang';

    protected static ?string $pluralModelLabel = 'Trang';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('page_tabs')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Thông tin chung')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Tiêu đề')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Đường dẫn')
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->helperText('Tự động tạo nếu để trống'),

                                Forms\Components\Select::make('template')
                                    ->label('Template')
                                    ->options([
                                        'default' => 'Mặc định',
                                        'about' => 'Giới thiệu',
                                        'contact' => 'Liên hệ',
                                        'services' => 'Dịch vụ',
                                        'custom' => 'Tùy chỉnh',
                                    ])
                                    ->default('default'),

                                Forms\Components\RichEditor::make('content')
                                    ->label('Nội dung')
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
                                    ->directory('images/pages')
                                    ->imageResizeMode('cover')
                                    ->imageCropAspectRatio('16:9'),

                                Forms\Components\Toggle::make('is_active')
                                    ->label('Kích hoạt')
                                    ->default(true),
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
                                    ->directory('images/pages/og'),
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

                Tables\Columns\TextColumn::make('title')
                    ->label('Tiêu đề')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Đường dẫn')
                    ->searchable(),

                Tables\Columns\TextColumn::make('template')
                    ->label('Template')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match($state) {
                        'default' => 'Mặc định',
                        'about' => 'Giới thiệu',
                        'contact' => 'Liên hệ',
                        'services' => 'Dịch vụ',
                        'custom' => 'Tùy chỉnh',
                        default => $state,
                    }),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Kích hoạt')
                    ->boolean(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Cập nhật')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('template')
                    ->label('Template')
                    ->options([
                        'default' => 'Mặc định',
                        'about' => 'Giới thiệu',
                        'contact' => 'Liên hệ',
                        'services' => 'Dịch vụ',
                        'custom' => 'Tùy chỉnh',
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
            ->defaultSort('updated_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
