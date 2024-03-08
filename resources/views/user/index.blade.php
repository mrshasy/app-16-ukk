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
                  Data User
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <a href="{{ url('user/create') }}" class="btn btn-primary">Tambah Data</a>
                      <a href="{{ url('admin') }}" class="btn btn-secondary">Kembali</a>
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
                          <th scope="col">Nama</th>
                          <th scope="col">Email</th>
                          <th scope="col">Telepon</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Role</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($users as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->telepon }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->role }}</td>
                            <td class="text-center mt-5">
                                <a href="/user/update/{{ $item->id }}" class="btn btn-sm btn-secondary mt-3 mb-3">Edit</a>
                                @if($item->role != 'admin')
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/user/delete/{{ $item->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-sm btn-danger mt-3 mb-3">Hapus</button>
                                </form>
                                @endif
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