<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               TextInput::make('name')
                    ->label('Project')
                    ->required()
                    ->afterStateHydrated(function (TextInput $component, string $state) {
                        $component->state(ucwords($state));
                    })
                    ->autofocus(),
                RichEditor::make('description')
                    ,
                TextInput::make('homepage')
                    ->required(),
                Toggle::make('is_public')->live(),
                Toggle::make('status')->label('Open')
                    ->live()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            //->modifyQueryUsing(fn (Builder $query) => $query->withoutGlobalScopes());

            ->columns([
                TextColumn::make('name'),
                TextColumn::make('description')
                    ->words(10),
                TextColumn::make('created_on')
                     ->date('m/d/Y'),
                TextColumn::make('updated_on')
                     ->since(),
                SelectColumn::make('status')
                    ->options([
                        1    => 'Active',
                        5    => 'Closed',
                    ])
                     
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
