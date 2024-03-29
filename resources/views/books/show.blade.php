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
            <div class="col-lg-12 mt-2">
              <div class="card-header">
                <b>Detail Buku</b>
              </div>
              <div class="card-border-0 shadow-sm rounded">
                <div class="card-body">
                    <img src="{{ public('storage/storage'.$post->image) }}" class="w-50 rounded">
                    <hr>
                    <h3>{{ $books->judul }}</h3>
                    <h5>{{ $books->penulis }}</h5>
                    <h5>{{ $books->penerbit }}</h5>
                    <p>{{ $books->deskripsi }}</p>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>