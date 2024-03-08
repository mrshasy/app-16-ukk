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
                        Edit User
                    </div>
                    <div class="card-body">
                        <form action="/user/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="name"><b>Nama :</b></label>
                                <input type="text" class="form-control form-control-xl" name="name" value="{{ old('name', $user->name) }}">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="email"><b>Email :</b></label>
                                <input type="text" class="form-control form-control-xl" name="email" value="{{ old('email', $user->email) }}">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="telepon"><b>Telepon :</b></label>
                                <input type="text" class="form-control form-control-xl" name="telepon" value="{{ old('telepon', $user->telepon) }}">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="alamat"><b>Alamat :</b></label>
                                <input type="text" class="form-control form-control-xl" name="alamat" value="{{ old('alamat', $user->alamat) }}">
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <label for="role" class="form-label"><b>Role :</b></label>
                                <select class="form-select form-select-sm" name="role" id="role">
                                    <option selected>Open this select role</option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="petugas" {{ $user->role == 'petugas' ? 'selected' : '' }}>Petugas</option>
                                    <option value="peminjam" {{ $user->role == 'peminjam' ? 'selected' : '' }}>Peminjam</option>
                                </select>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-outline-primary btn-sm">Update</button>
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