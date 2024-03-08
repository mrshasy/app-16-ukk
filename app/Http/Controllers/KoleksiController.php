<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Koleksi;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index()
    {
        $data = Book::all();
        return view('koleksi.index', compact('data'));
    }

    public function store(Request $request)
    {
        $koleksi = $request->validate([
            'id_buku' => 'required',
            'id_user' => 'required',
        ]);
        
        Koleksi::create($koleksi);
        return redirect()->back();
    }

    public function destroy(String $id)
    {
        $koleksi = Koleksi::where('id_koleksi', $id);

        $koleksi->delete();
        return redirect()->back();
    }
}