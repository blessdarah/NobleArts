<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Models\TeamMember;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static ?string $navigationGroup = "cms";

    protected static ?string $recordTitleAttribute = "name";

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make("image")
                    ->label("Profile image")
                    ->image()
                    ->avatar()
                    ->columnSpanFull(),
                TextInput::make("name")->required(),
                Select::make("type")->options(TeamMember::OPTIONS),
                TextInput::make("position"),
                TextInput::make("website")->url(),
                TextInput::make("email")->email()->required(),
                TextInput::make("telephone")->tel(),
                TextInput::make("facebook")->url(),
                TextInput::make("twitter")->url(),
                TextInput::make("instagram")->url(),
                TextInput::make("linkedin")->url(),
                RichEditor::make("about")->label("About info")->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name")->sortable()->searchable(),
                TextColumn::make("position")->sortable()->searchable(),
                TextColumn::make("email")->sortable()->searchable(),
                TextColumn::make("telephone")->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
