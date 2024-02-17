<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100" style="background-color: #2db2c9c7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem; height: 30rem">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-md-block">
                    {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" /> --}}
                      <img src="assets/images/perpus2.jpg" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:30rem" class="mt-20">
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center mt-5 mb-5">
                    <div class="card-body p-4 p-lg-5 text-black">
                        @if ($errors->any())
                         <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $item)
                          <li>{{ $item }}</li>
                             @endforeach
                            </ul>
                        </div>
                         @endif
                      <form action="" method="POST">
                        @csrf
      
                        <h2>Log In</h2>
      
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                        </div>
      
                        <div class="form-outline mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                        </div>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/regis"
                            style="color: #393f81;">Register here</a></p>
                      </form>
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