<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100" style="background-color: #2db2c9c7;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px; height: 35rem">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h4 fw-bold mb-2">Register</p>
                      <form method="post" action="/register/add">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="form"><b>Email :</b></label>
                            <input type="text" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Email" name="email">
                        </div>
      
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="form"><b>Nama :</b></label>
                            <input type="text" class="form-control form-control-xl @error('name') is-invalid @enderror" placeholder="Nama" name="name">
                        </div>
      
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="form"><b>Password :</b></label>
                            <input type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password" name="password">
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="form"><b>Telepon :</b></label>
                            <input type="text" class="form-control form-control-xl @error('telepon') is-invalid @enderror" placeholder="Telepon" name="telepon">
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="form"><b>Alamat :</b></label>
                            <input type="text" class="form-control form-control-xl @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat">
                        </div>
      
                        <div class="d-flex justify-content-start  mb-3 ">
                          <button type="submit" class="btn btn-outline-primary btn-sm">Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid mt-0" alt="Sample image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>