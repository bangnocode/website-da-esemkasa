<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use App\Models\ModelBerita;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ViewColumn;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = ModelBerita::class;
    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $pluralLabel = 'Berita';
    protected static ?string $modelLabel = 'Berita';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Judul
                TextInput::make('judul')
                    ->label('Judul Berita')->unique()
                    ->required(),

                // Tanggal
                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->required(),

                // Slug
                TextInput::make('slug')
                    ->label('Slug')->unique()
                    ->required(),

                // Keywords (untuk meta SEO)
                TextInput::make('keywords')
                    ->label('Kata Kunci (pisahkan dengan koma)')
                    ->placeholder('contoh: pramuka, kegiatan, smkn 1 banyuwangi'),

                // Isi Berita
                RichEditor::make('isi_berita')
                    ->label('Isi Berita')
                    ->required(),

                // Thumbnail
                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->directory('berita/thumbnails')
                    ->required(),

                // Dokumentasi Kegiatan
                FileUpload::make('dokumentasi_kegiatan')
                    ->label('Dokumentasi Kegiatan')
                    ->image()
                    ->multiple()
                    ->directory('berita/dokumentasi')
                    ->reorderable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->label('Thumbnail'),
                TextColumn::make('judul')->label('Judul')->limit(25),
                TextColumn::make('isi_berita')->label('Isi Berita')->limit(25),
                TextColumn::make('tanggal')->label('Tanggal'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
