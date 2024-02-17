<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    @include('layout.header')
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
                      <a href="" class="btn btn-primary">Tambah Data</a>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <table class="table table-bordered table striped">
                        <tr>
                          <th>No</th>
                          <th>Nama Buku</th>
                          <th>Penerbit</th>
                          <th>Aksi</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Off The Record</td>
                          <td>Ria SW</td>
                        </tr>
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