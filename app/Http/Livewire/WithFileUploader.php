<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class WithFileUploader extends Component implements HasForms
{
    use InteractsWithForms;

    public $image;

    protected function getFormSchema(): array
    {
        return [
            FileUpload::make('image')
                ->label('Featured Image')
                ->maxSize(1000000)
        ];
    }

    public function render()
    {
        return view('livewire.with-file-uploader');
    }
}
