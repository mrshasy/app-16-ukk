@extends('layout.template')
@section('content')
<main id="main">
<!-- slider section -->
<section class="slider_section long_section">
    <div id="customCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-5">
                <div class="detail-box">
                  <h1>
                    Halaman Petugas <br>
                  </h1>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque ratione amet veniam, magnam, accusantium repellat corporis eveniet unde maxime accusamus delectus cupiditate quibusdam dicta ullam. Illum ratione labore blanditiis perspiciatis nesciunt nulla nam, veritatis ullam esse, architecto, magni inventore.
                  </p>
                  {{-- <div class="btn-box">
                    <a href="" class="btn1">
                      Log In
                    </a>
                    <a href="" class="btn2">
                      Register
                    </a>
                  </div> --}}
                </div>
              </div>
              <div class="col-md-7">
                <div class="img-box">
                  <img src="assets/images/perpus.jpeg" align="right" alt="" style="border-radius: 8%; width: 500px; height:400px;" class="mt-3">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- end section --}}

    <!-- blog section -->

    <section class="blog_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2>
              Daftar Buku
            </h2>
          </div>
          <div class="row">
            <div class="col-md-3  mx-auto">
              <div class="card" style="">
                <img src="assets/images/otr1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Off The Record</b></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-3  mx-auto">
              <div class="card" style="">
                <img src="assets/images/otr2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Off The Record 2</b></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-3  mx-auto">
              <div class="card" style="">
                <img src="assets/images/otr3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Off The Record 3</b></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-3  mx-auto">
              <div class="card" style="">
                <img src="assets/images/otr1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><b>Off The Record</b></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end blog section -->
    </main>
      @endsection