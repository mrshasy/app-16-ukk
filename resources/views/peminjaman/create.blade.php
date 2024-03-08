<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-header">
                        Tambah Data Peminjaman
                    </div>
                    <div class="card-body">
                        <form action="{{ url('peminjaman') }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="id_buku" class="form-label"><b>Buku :</b></label>
                                    <select class="form-select" name="id_buku" id="id_buku">
                                        @foreach($bukuList as $buku)
                                        <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="form-group mb-4"> 
                                <label for="id_user" class="form-label"><b>User :</b></label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="id_user" id="id_user">
                                        @foreach($peminjamList as $peminjam)
                                        <option value="{{ $peminjam->id }}">{{ $peminjam->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Tanggal Pinjam :</b></label>
                                <input type="date" class="form-control form-control-xl @error('tgl_pinjam') is-invalid @enderror" placeholder="Tanggal Pinjam" id="tgl_pinjam" name="tgl_pinjam">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Tanggal Kembali :</b></label>
                                <input type="date" class="form-control form-control-xl @error('tgl_kembali') is-invalid @enderror" placeholder="Tanggal Kembali" id="tgl_kembali" name="tgl_kembali">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Jumlah :</b></label>
                                <input type="text" class="form-control form-control-xl @error('jumlah') is-invalid @enderror" placeholder="Jumlah" id="jumlah"  name="jumlah">
                            </div>
                                <button type="submit" class="btn btn-outline-primary btn-sm">Tambah</button>
                                <button type="reset" class="btn btn-outline-warning btn-sm">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>