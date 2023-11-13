<?php

namespace App\Livewire;

use App\Models\Shop\Product;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;

use Filament\Tables\Actions\Action;
use Livewire\Component;

class ListProducts extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(Product::query())
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('slug'),
                IconColumn::make('featured')
                    ->boolean(),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                Action::make('edit')
                    // ->url(fn (Product $record): string => route('posts.edit', $record))
                    ->openUrlInNewTab(),

                Action::make('delete')
                    ->requiresConfirmation()
                    ->action(fn (Product $record) => $record->delete())
            ])
            ->bulkActions([
                // ...
            ]);
    }

    public function render(): View
    {
        return view('livewire.list-products');
    }
}
