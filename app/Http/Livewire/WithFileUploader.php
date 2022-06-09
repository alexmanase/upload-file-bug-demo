<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Livewire\WithFileUploads;

class WithFileUploader extends Component
{
    use WithFileUploads;

    public $image;

    public function render()
    {
        return view('livewire.with-file-uploader');
    }

    public function save()
    {
        $this->validate([
            'image' => 'image|max:10240', // 10MB Max
        ]);

        logger($this->image);
    }
}
