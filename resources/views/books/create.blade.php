<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Buku
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Judul Buku :</b></label>
                                <input type="text" class="form-control form-control-xl @error('judul') is-invalid @enderror" placeholder="Judul" name="judul">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Penulis Buku :</b></label>
                                <input type="text" class="form-control form-control-xl @error('penulis') is-invalid @enderror" placeholder="Penulis" name="penulis">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Penerbit Buku :</b></label>
                                <input type="text" class="form-control form-control-xl @error('penerbit') is-invalid @enderror" placeholder="Penerbit" name="penerbit">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Sinopsis" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Deskripsi</label>
                              </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Tahun Terbit :</b></label>
                                <input type="text" class="form-control form-control-xl @error('tahun_terbit') is-invalid @enderror" placeholder="Tahun Terbit" name="tahun_terbit">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile">
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