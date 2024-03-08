<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Laporan Peminjaman</h5>
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Buku</th>
                      <th scope="col">Peminjam</th>
                      <th scope="col">Tanggal Pinjam</th>
                      <th scope="col">Tanggal Kembali</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Status</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $i = $pinjam->firstItem(); ?>
                  @foreach ( $pinjam as $item )
                      <tr>
                          <th>{{ $i }}</th>
                          <td>{{ $item->book->judul }}</td>
                          <td>{{ $item->user->name }}</td>
                          <td>{{ $item->tgl_pinjam }}</td>
                          <td>{{ $item->tgl_kembali }}</td>
                          <td>{{ $item->jumlah }}</td>
                          <td>
                              @if($item->status == '0')
                                  Belum dikembalikan
                              @else
                                  Sudah dikembalikan
                              @endif
                          </td>
                      </tr>
                      <?php $i++; ?>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
  <script>
      window.print()
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
