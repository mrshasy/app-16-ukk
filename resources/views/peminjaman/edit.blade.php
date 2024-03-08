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
                        Edit Peminjaman
                    </div>
                    <div class="card-body">
                        <form action="{{ url('peminjaman/' . $pinjam->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <label for="id_buku" class="form-label"><b>Buku :</b></label>
                                    <select class="form-select" name="id_buku" id="id_buku" disabled>
                                        @foreach($bukuList as $buku)
                                        <option value="{{ $buku->id == $pinjam->id ? 'selected' : ''}}">
                                        {{ $buku->judul }}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="form-group mb-4"> 
                                <label for="id_user" class="form-label"><b>User :</b></label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="id_user" id="id_user" disabled>
                                        @foreach($peminjamList as $peminjam)
                                        <option value="{{ $peminjam->id == $pinjam->id ? 'selected' : ''}}">{{ $peminjam->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- value="{{ $pinjam->tgl_pinjam}}" --}}
                            {{-- contoh --}}
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Tanggal Pinjam :</b></label>
                                <input type="date" class="form-control form-control-xl @error('tgl_pinjam') is-invalid @enderror" placeholder="Tanggal Pinjam" name="tgl_pinjam" value="{{ $pinjam->tgl_pinjam}}" disabled>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Tanggal Kembali :</b></label>
                                <input type="date" class="form-control form-control-xl @error('tgl_kembali') is-invalid @enderror" placeholder="Tanggal Kembali" name="tgl_kembali" value="{{ $pinjam->tgl_kembali}}" disabled>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Jumlah :</b></label>
                                <input type="text" class="form-control form-control-xl @error('jumlah') is-invalid @enderror" placeholder="Jumlah" name="jumlah" value="{{ $pinjam->jumlah}}" disabled>
                            </div>
                            <fieldset class="row mb-3 mt-4">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="status" id="status" value="0" {{ $pinjam->status == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">
                                            Belum dikembalikan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="status" id="status" value="1" {{ $pinjam->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">
                                            Sudah dikembalikan
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div>
                                <button type="submit" class="btn btn-outline-primary btn-sm">Update</button>
                                {{-- <button type="reset" class="btn btn-outline-warning btn-sm">Reset</button> --}}
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>