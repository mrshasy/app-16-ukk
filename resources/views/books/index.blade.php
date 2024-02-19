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
                          <th>No</th>
                          <th>Judul Buku</th>
                          <th>Penulis</th>
                          <th>Penerbit</th>
                          <th>Deskripsi</th>
                          <th>Tahun Terbit</th>
                          <th>Image</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($books as $book)
                        <tr>
                          <td>1</td>
                          {{-- <td class="text-center"></td> --}}
                          <td>{{ $book->judul }}</td>
                          <td>{{ $book->penulis }}</td>
                          <td>{{ $book->penerbit }}</td>
                          <td>{{ $book->deskripsi }}</td>
                          <td>{{ $book->tahun_terbit }}</td>
                        {{-- <td class="text-center">
                            <img src="{{ storage('/storage'.$post->image) }}" class="rounded" style="width: 100px">
                        </td> --}}
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ url('books.destroy', $book->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                          Data Post belum Tersedia.
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