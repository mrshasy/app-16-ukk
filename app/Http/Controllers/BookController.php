<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $books = Book::latest()->paginate(10);

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // $kategoris = Kategori::all();
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

            $this->validate($request, [
                'judul' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
                'tahun_terbit' => 'required',
                'image' => 'required',
               
            ]);

            $image = $request->file('image');
            $image->storeAs('public/storage', $image->hashName());

            Book::create([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'deskripsi' => $request->deskripsi,
                'tahun_terbit' => $request->tahun_terbit,
                'image' => $image->hashName(),
            ]);

            return redirect('books')->with(['success' => 'Data Berhasil Disimpan']);
            // return redirect()->route('/admin')->with(['success' => 'Data Berhasil Disimpan']);

        // $request->validate([
        //     'judul' => 'required',
        // ]);

        // $input = $request->all();

        // if ($image =   $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('Ymdhis') . '.' . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = '$profileImage';
        // }

        // Book::create($input);

        // return redirect()->route('admin')
        //     ->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $books = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'deskripsi' => 'nullable',
            'tahun_terbit' => 'required'
        ]);
        
        $book = Book::findOrFail($id);
        // dd($book);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/storage',  $image->hashName());

            Storage::delete('public/storage'.$book->image);

            $book->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'deskripsi' => $request->deskripsi,
                'tahun_terbit' => $request->tahun_terbit,
                'image' => $image->hashName()
            ]);
        } else {
            $book->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'deskripsi' => $request->deskripsi,
                'tahun_terbit' => $request->tahun_terbit,
            ]);
        }

        return redirect('books')->with(['success' => 'Data Berhasil Dihapus']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $book = Book::findOrFail($id);

        Storage::delete('public/storage/'. $book->image);

        $book->delete();

        return redirect('books')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
