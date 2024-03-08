<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Peminjaman;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $pinjam = Peminjaman::get();

        $pinjam = [
            'title' => 'Peminjaman',
            'date' => date('m/d/Y'),
            'peminjaman' => $pinjam
        ];

        // $pdf = FacadePdf::loadView('myPDF', $pinjam);

        // return $pdf->download('namaFile.pdf');
    }
}