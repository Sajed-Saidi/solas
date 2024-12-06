<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Filament\Resources\ContentResource\Widgets\ContentStatsWidget;
use App\Models\Content;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Group::make()->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Title')
                            ->placeholder('Enter the content title')
                            ->required()
                            ->maxLength(191),

                        Forms\Components\Textarea::make('description')
                            ->label('Description')
                            ->placeholder('Enter a detailed description')
                            ->rows(7)
                            ->required(),
                    ])
            ]),
            Group::make()->schema([
                Section::make()
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->label('Type')
                            ->options([
                                'activity' => 'Activity',
                                'article' => 'Article',
                            ])
                            ->default('activity')
                            ->required()
                            ->columnSpan(1),
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft' => "Draft",
                                'published' => "Published",
                                'archived' => "Archived",
                            ])
                            ->default('draft')
                            ->required()
                            ->columnSpan(1),

                    ])->columns(2),
                Section::make('Images')
                    ->description('You can upload up to 5 images.')
                    ->schema([
                        Forms\Components\FileUpload::make('images')
                            ->multiple()
                            ->hiddenLabel()
                            ->image()
                            ->minFiles(0)
                            ->maxFiles(5)
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/*'])
                            ->validationMessages([
                                'max_files' => 'You can upload a maximum of 5 images.',
                                'max' => 'Each image must not exceed 2MB in size.',
                            ])
                    ])->collapsible()

            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')
                ->label('Title')
                ->searchable(),

            Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->badge()
                ->searchable(),

            Tables\Columns\TextColumn::make('type')
                ->label('Type')
                ->badge()
                ->searchable(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime()
                ->sortable(),

            Tables\Columns\ImageColumn::make('images')
                ->label('Content Images')
                ->circular()
                ->stacked()
                ->limit(3)
                ->limitedRemainingText('and more...'),
        ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => "Draft",
                        'published' => "Published",
                        'archived' => "Archived",
                    ]),

                Tables\Filters\SelectFilter::make('type')
                    ->label('Type')
                    ->options([
                        'activity' => 'Activity',
                        'article' => 'Article',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->iconSize('lg')->hiddenLabel(),
                Tables\Actions\DeleteAction::make()->iconSize('lg')->hiddenLabel(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->label('Delete Selected'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContents::route('/'),
            'create' => Pages\CreateContent::route('/create'),
            'edit' => Pages\EditContent::route('/{record}/edit'),
        ];
    }

    // public static function getWidgets(): array
    // {
    //     return [
    //         ContentStatsWidget::class
    //     ];
    // }
    // public function getHeaderWidgets(): array
    // {
    //     return [
    //         ContentStatsWidget::class
    //     ];
    // }
}
