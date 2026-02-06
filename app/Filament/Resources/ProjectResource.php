<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use App\Models\ProjectCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Dịch vụ';

    protected static ?string $navigationLabel = 'Dự án';

    protected static ?string $modelLabel = 'Dự án';

    protected static ?string $pluralModelLabel = 'Dự án';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('project_tabs')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Thông tin chung')
                            ->schema([
                                Forms\Components\Select::make('project_category_id')
                                    ->label('Danh mục')
                                    ->options(ProjectCategory::query()->pluck('name', 'id'))
                                    ->searchable()
                                    ->required(),

                                Forms\Components\TextInput::make('name')
                                    ->label('Tên dự án')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Đường dẫn')
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->helperText('Tự động tạo nếu để trống'),

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
                                    ->directory('images/projects')
                                    ->imageResizeMode('cover')
                                    ->imageCropAspectRatio('16:9'),

                                Forms\Components\FileUpload::make('gallery')
                                    ->label('Thư viện ảnh')
                                    ->image()
                                    ->disk('public_assets')
                                    ->multiple()
                                    ->directory('images/projects/gallery')
                                    ->maxFiles(10),
                            ]),

                        Forms\Components\Tabs\Tab::make('Chi tiết dự án')
                            ->schema([
                                Forms\Components\TextInput::make('client_name')
                                    ->label('Tên khách hàng')
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('project_type')
                                    ->label('Loại dự án')
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('duration')
                                    ->label('Thời gian thực hiện')
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('standard')
                                    ->label('Tiêu chuẩn áp dụng')
                                    ->maxLength(255),

                                Forms\Components\DatePicker::make('start_date')
                                    ->label('Ngày bắt đầu'),

                                Forms\Components\DatePicker::make('end_date')
                                    ->label('Ngày kết thúc'),
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
                                    ->directory('images/projects/og'),
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
                    ->label('Tên dự án')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh mục')
                    ->sortable(),

                Tables\Columns\TextColumn::make('client_name')
                    ->label('Khách hàng')
                    ->searchable(),

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
                Tables\Filters\SelectFilter::make('project_category_id')
                    ->label('Danh mục')
                    ->options(ProjectCategory::query()->pluck('name', 'id')),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
