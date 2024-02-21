<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-2" style="min-height: 480px">
              <div class="card">
                <div class="card-header">
                  Data Buku
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <a href="{{ url('books.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                  </div>
                  {{-- @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                  @endif --}}
                  <div class="row mt-3">
                    <div class="col">
                      <table class="table table-bordered table striped">
                        <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Judul Buku</th>
                          <th scope="col">Penulis</th>
                          <th scope="col">Penerbit</th>
                          <th scope="col">Deskripsi</th>
                          <th scope="col">Tahun Terbit</th>
                          <th scope="col">Image</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = $books->firstItem(); ?>
                        @forelse ($books as $book)
                        <tr>
                          <td>{{ $i }}</td>
                          {{-- <td class="text-center"></td> --}}
                          <td>{{ $book->judul }}</td>
                          <td>{{ $book->penulis }}</td>
                          <td>{{ $book->penerbit }}</td>
                          <td>{{ $book->deskripsi }}</td>
                          <td>{{ $book->tahun_terbit }}</td>
                        <td class="text-center">
                            <img src="{{ url('/storage/storage/'. $book->image) }}" class="rounded" style="width: 100px">
                            {{-- <img src="assets/images/otr1.jpg" class="w-20 rounded" style="height: 20rem" > --}}
                        </td>
                        <td class="text-center mt-5">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('books.destroy', $book->id) }}" method="post">
                              {{-- <a href="{{ url('/books/show/'.$book->id) }}" class="btn btn-sm btn-primary">Show</a> --}}
                              <a href="{{ url('/books/edit/'.$book->id) }}" class="btn btn-sm btn-secondary mt-5">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mt-5">Hapus</button>
                            </form>
                        </td>
                        </tr>
                        <?php $i++ ?>
                        @empty
                        <div class="alert alert-danger">
                          Data Buku belum Tersedia.
                      </div>     
                        @endforelse
                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </body>
</html>