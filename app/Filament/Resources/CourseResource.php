<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Models\Course;
use App\Models\CourseCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'Đào tạo';

    protected static ?string $navigationLabel = 'Khóa học';

    protected static ?string $modelLabel = 'Khóa học';

    protected static ?string $pluralModelLabel = 'Khóa học';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('course_tabs')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Thông tin chung')
                            ->schema([
                                Forms\Components\Select::make('course_category_id')
                                    ->label('Danh mục')
                                    ->options(CourseCategory::query()->pluck('name', 'id'))
                                    ->searchable()
                                    ->required(),

                                Forms\Components\TextInput::make('name')
                                    ->label('Tên khóa học')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Đường dẫn')
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->helperText('Tự động tạo nếu để trống'),

                                Forms\Components\TextInput::make('badge')
                                    ->label('Badge')
                                    ->maxLength(100)
                                    ->placeholder('VD: Mới, Hot, Bestseller'),

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

                                Forms\Components\RichEditor::make('overview')
                                    ->label('Tổng quan khóa học')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'bulletList',
                                        'orderedList',
                                    ])
                                    ->columnSpanFull(),

                                Forms\Components\FileUpload::make('featured_image')
                                    ->label('Ảnh đại diện')
                                    ->image()
                                    ->disk('public_assets')
                                    ->directory('images/courses')
                                    ->imageResizeMode('cover')
                                    ->imageCropAspectRatio('16:9'),

                                Forms\Components\FileUpload::make('gallery')
                                    ->label('Thư viện ảnh')
                                    ->image()
                                    ->disk('public_assets')
                                    ->multiple()
                                    ->directory('images/courses/gallery')
                                    ->maxFiles(10),
                            ]),

                        Forms\Components\Tabs\Tab::make('Chi tiết khóa học')
                            ->schema([
                                Forms\Components\TextInput::make('duration_hours')
                                    ->label('Thời lượng (giờ)')
                                    ->numeric()
                                    ->minValue(0),

                                Forms\Components\TextInput::make('total_sessions')
                                    ->label('Số buổi học')
                                    ->numeric()
                                    ->minValue(0),

                                Forms\Components\Select::make('format')
                                    ->label('Hình thức')
                                    ->options([
                                        'offline' => 'Offline',
                                        'online' => 'Online',
                                        'hybrid' => 'Hybrid',
                                    ]),

                                Forms\Components\TextInput::make('min_students')
                                    ->label('Số học viên tối thiểu')
                                    ->numeric()
                                    ->minValue(1),

                                Forms\Components\TextInput::make('max_students')
                                    ->label('Số học viên tối đa')
                                    ->numeric()
                                    ->minValue(1),

                                Forms\Components\Toggle::make('has_certificate')
                                    ->label('Có chứng chỉ')
                                    ->default(false),

                                Forms\Components\TextInput::make('price')
                                    ->label('Giá (VNĐ)')
                                    ->default('Liên hệ')
                                    ->helperText('Nhập số tiền hoặc "Liên hệ"'),

                                Forms\Components\TextInput::make('discount_price')
                                    ->label('Giá khuyến mãi (VNĐ)')
                                    ->helperText('Để trống nếu không giảm giá'),
                            ]),

                        Forms\Components\Tabs\Tab::make('Modules')
                            ->schema([
                                Forms\Components\Repeater::make('modules')
                                    ->relationship()
                                    ->label('Các module')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Tiêu đề module')
                                            ->required()
                                            ->maxLength(255),

                                        Forms\Components\Textarea::make('content')
                                            ->label('Mô tả module')
                                            ->rows(2),

                                        Forms\Components\Repeater::make('lessons')
                                            ->label('Bài học')
                                            ->schema([
                                                Forms\Components\TextInput::make('title')
                                                    ->label('Tên bài học')
                                                    ->required(),
                                            ])
                                            ->collapsible()
                                            ->defaultItems(0),

                                        Forms\Components\TextInput::make('order')
                                            ->label('Thứ tự')
                                            ->numeric()
                                            ->default(0),

                                        Forms\Components\Toggle::make('is_active')
                                            ->label('Kích hoạt')
                                            ->default(true),
                                    ])
                                    ->orderColumn('order')
                                    ->collapsible()
                                    ->defaultItems(0)
                                    ->columnSpanFull(),
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
                                    ->directory('images/courses/og'),
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
                    ->label('Tên khóa học')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh mục')
                    ->sortable(),

                Tables\Columns\TextColumn::make('badge')
                    ->label('Badge')
                    ->badge(),

                Tables\Columns\TextColumn::make('duration_hours')
                    ->label('Thời lượng')
                    ->suffix(' giờ')
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Giá')
                    ->money('VND')
                    ->sortable(),

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
                Tables\Filters\SelectFilter::make('course_category_id')
                    ->label('Danh mục')
                    ->options(CourseCategory::query()->pluck('name', 'id')),
                Tables\Filters\SelectFilter::make('format')
                    ->label('Hình thức')
                    ->options([
                        'offline' => 'Offline',
                        'online' => 'Online',
                        'hybrid' => 'Hybrid',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Kích hoạt'),
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Nổi bật'),
                Tables\Filters\TernaryFilter::make('has_certificate')
                    ->label('Có chứng chỉ'),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
