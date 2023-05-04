@extends('layout.master')
@section('content')

<main>
    <div class="container py-5">
      <h1>Day: March 14, 2023</h1>

      <div class="row mb-5">
        <div class="col-md-9 mb-3">
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="card">
                <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{ url('berita/1') }}">
                      Siap Kolaborasi Bareng Komunitas Pesepeda, Batur Mba Wulan Komitmen
                      Majukan UMKM
                    </a>
                  </h5>
                  <p class="card-text">
                    <i>Description...</i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="card">
                <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{ url('berita/1') }}">
                      Siap Kolaborasi Bareng Komunitas Pesepeda, Batur Mba Wulan Komitmen
                      Majukan UMKM
                    </a>
                  </h5>
                  <p class="card-text">
                    <i>Description...</i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="card">
                <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{ url('berita/1') }}">
                      Siap Kolaborasi Bareng Komunitas Pesepeda, Batur Mba Wulan Komitmen
                      Majukan UMKM
                    </a>
                  </h5>
                  <p class="card-text">
                    <i>Description...</i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="card">
                <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{ url('berita/1') }}">
                      Siap Kolaborasi Bareng Komunitas Pesepeda, Batur Mba Wulan Komitmen
                      Majukan UMKM
                    </a>
                  </h5>
                  <p class="card-text">
                    <i>Description...</i>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <form action="">
            <div class="input-group mb-3">
              <input type="search" class="form-control" placeholder="Cari disini" aria-label="search"
                aria-describedby="button-addon2">
              <button class="btn btn-warning" type="button" id="button-addon2">Search</button>
            </div>
          </form>
          <h2>Recent Posts</h2>
          <a href="">
            Siap Kolaborasi Bareng Komunitas Pesepeda, Batur Mba Wulan Komitmen Majukan UMKM
          </a>
          <h2 class="mt-5">Recent Comments</h2>
          <span>No comments to show.</span>
        </div>
      </div>
    </div>
  </main>

@stop