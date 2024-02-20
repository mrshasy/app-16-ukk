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
                        Tambah Kategori Buku
                    </div>
                    <div class="card-body">
                        <form action="/kategoris" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="form"><b>Kategori Buku :</b></label>
                                <input type="text" class="form-control form-control-xl @error('nama_kategori') is-invalid @enderror" placeholder="Nama Kategori" name="nama_kategori">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-outline-primary btn-sm">Tambah</button>
                                <button type="reset" class="btn btn-outline-warning btn-sm">Reset</button>
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