<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-2" style="min-height: 480px">
              <div class="card">
                <div class="card-header">
                  Data Peminjaman
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <a href="{{ url('peminjaman/create') }}" class="btn btn-primary">Tambah Data</a>
                      <a href="{{ url('cetak') }}" class="btn btn-success" title="print">Print</a>
                      <a href="{{ url('admin') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="col">
                      {{-- <a class="btn btn-success btn-sm mb-3" title="print" href="{{ url('peminjaman-cetak') }}" role="button"></a> --}}
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
                          <th scope="col">Nama Buku</th>
                          <th scope="col">Peminjam</th>
                          <th scope="col">Tanggal Pinjam</th>
                          <th scope="col">Tanggal Kembali</th>
                          <th scope="col">Jumlah</th>
                          <th scope="col">Status</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($pinjam as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          {{-- <td class="text-center"></td> --}}
                          <td>{{ $item->book->judul }}</td>
                          @if($item->user)
                            <td>{{ $item->user->name }}</td>
                          @else
                            <td>Akun Dihapus</td>
                          @endif
                          <td>{{ $item->tgl_pinjam }}</td>
                          <td>{{ $item->tgl_kembali }}</td>
                          <td>{{ $item->jumlah }}</td>
                          <td>
                            @if($item->status === '0')
                              Belum di kembalikan
                            @else
                              Sudah di kembalikan
                            @endif
                          </td>
                        <td class="text-center mt-5">
                          <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-sm btn-secondary mt-3 mb-3"><i class="bi bi-pencil-square"></i></a>
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('peminjaman.destroy', $item->id) }}" method="post">
                            {{-- <a href="{{ url('/books/show/'.$book->id) }}" class="btn btn-sm btn-primary">Show</a> --}}
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger mt-3 mb-3"><i class="bi bi-trash3-fill"></i></button>
                          </form>
                        </td>
                        </tr>
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