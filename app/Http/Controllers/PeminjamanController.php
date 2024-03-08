<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Peminjaman;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjam = Peminjaman::with(['user', 'book'])->latest()->paginate();

        return view('peminjaman.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjamList = User::where('role', 'peminjam')->get();
        $bukuList = Book::all();

        return view('peminjaman.create', compact('peminjamList', 'bukuList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        try {
            $valiadateData = $request->validate([
                'id_user' => 'required',
                'id_buku' => 'required',
                'tgl_pinjam' => 'required',
                'tgl_kembali' => 'required',
                'jumlah' => 'required',
            ]);


            Peminjaman::create($valiadateData);
            return redirect()->to('peminjaman')->with('success', 'Berhasil tambah data');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjamList = User::where('role', 'peminjam')->get();
        $bukuList = Book::all();
        $pinjam = Peminjaman::findOrFail($id);

        return view('peminjaman.edit', compact('peminjamList', 'bukuList', 'pinjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'status' => 'required'
        ]);

        $pinjam = Peminjaman::findorFail($id);

        $pinjam->update([
            'status' => $request->status,
        ]);

        return redirect()->to('peminjaman')->with('success', 'Berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pinjam = Peminjaman::findorFail($id);

        $pinjam->delete();
        return redirect()->to('peminjaman')->with('success', 'Berhasil hapus data');
    }

    public function cetak()
    {
        // dd('masuk');
        $pinjam = Peminjaman::latest()->with('user')->with('book')->paginate(200);
        return view('peminjaman.cetak', compact('pinjam'));
    }

    // public function cetak_pdf()
    // {
    //     $pinjam = Peminjaman::all();

    //     $pdf = PDF::loadview('myPDF', ['pinjam' => $pinjam]);
    //     return $pdf->download('laporan-pinjam-pdf');
    // }

    // public function cetak() 
    // {
    //     $pinjam = Peminjaman::latest()->with('user')->with('book')->paginate(200);
    //     return view('peminjaman.cetak', compact('pinjam'));
    // }
}
