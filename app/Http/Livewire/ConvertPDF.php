<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\PdfToText\Pdf;

class ConvertPDF extends Component
{
    use WithFileUploads;

    public $convertPDFToText;

    /**
     * @throws \Spatie\PdfToText\Exceptions\PdfNotFound
     */
    public function convertPDFToText(){


    }
    public function render()
    {
        return view('livewire.convert-p-d-f');
    }
}
