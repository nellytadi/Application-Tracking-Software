<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class ResumeController extends Controller
{
    public function convertToPDF(Request $request){
        $request->validate([
            'resumePDF' => 'required|mimes:pdf|max:2048', // 2MB Max
        ]);

        return (new Pdf('/usr/local/bin/pdftotext'))
            ->setPdf($request->file('resumePDF'))
            ->text();
    }

    public function analyse(Request $request){
        $validatedData = $request->validate([
            'resumePDF' => 'required|mimes:pdf|max:2048', // 2MB Max
            'resume' => 'required',
            'jobTitle' => 'required',
            'jobIndustry' => 'nullable',
            'jobDescription' => 'required',
        ]);


        dd($validatedData);


    }


}
