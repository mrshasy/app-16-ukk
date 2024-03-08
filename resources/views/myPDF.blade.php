<div class=>
    <table class="table table-striped table-bordered my-2" id="table1">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul Buku</th>
                <th>Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pinjam as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-center">{{ Str::title($item->book->judul) }}</td>
                    <td class="text-center">{{ Str::title($item->user->name) }}</td>
                    <td class="text-center">{{ $item->tgl_pinjam }}</td>
                    <td class="text-center">{{ $item->tgl_kembali }}</td>
                    <td class="text-center">{{ Str::title($item->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>