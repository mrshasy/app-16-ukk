<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KategoriController extends Controller
{
    public function index(): View 
    {
        $kategoris = Kategori::latest()->paginate(5);

        return view('kategori.index', compact('kategoris'));
    }

    public function create(): View
    {
        return view('kategori.create');
    }

    public function store(Request $request): RedirectResponse
    {

            $this->validate($request, [
                'nama_kategori' => 'required'
            ]);

            Kategori::create([
                'nama_kategori' => $request->nama_kategori,
            ]);
            return redirect('kategoris')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function edit(string $id_kategori): View
    {
        $kategori = Kategori::findOrFail($id_kategori);
        return view('kategori.edit', compact('kategoris'));
    }

    public function update(Request $request, $id_kategori): RedirectResponse
    {
        $this->validate($request, [
            'nama_kategori' => 'required'
        ]);

        $kategori = Kategori::where('id_kategori',$id_kategori);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('kategoris')->with(['success' => 'Data berhasil diedit']);
    }


    public function destroy($id_kategori): RedirectResponse
    {
        $kategori = Kategori::where('id_kategori',$id_kategori)->delete();
       

        return redirect('kategoris')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
