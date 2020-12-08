<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generate_pdf() {

        $pdf = \PDF::loadView('generate_pdf');
        return $pdf->stream('title.pdf');
}
