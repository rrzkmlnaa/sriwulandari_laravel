@extends('layout.master')
@section('content')

<main>
    <div class="container py-5">
      <div class="row mb-5">
        <div class="col-md-9 mb-3">
          <h1>Siap Kolaborasi Bareng Komunitas Pesepeda, Batur Mba Wulan Komitmen Majukan UMKM</h1>
          <span>
            By Admin
            <i class="fa-regular fa-circle-dot"></i>
            March 14, 2023
            <i class="fa-regular fa-circle-dot"></i>
            Uncategorized
          </span>
          <img src="{{url('/')}}/img/berita_1.jpg" alt="img" loading="lazy" class="img-fluid my-3">

          <p>
            “Aksi sosial Migora ini merupakan kerjasama Jabar Bergerak Kota Depok dengan Koperasi Kahiji Jaya Maju
            Bersama. Alhamdulilah launching Migora berjalan lancar dan masyarakat di sekitar RT 02 RW 16 Kelurahan Depok
            sangat bahagia dan senang karena bisa mendapatkan minyak goreng dengan harga terjangkau,” kata Cing Ikah
            usai peluncuran.
          </p>

          <p>
            Menurut Cing Ikah, Migora merupakan kegiatan dibidang sosial dan salam koloborasi menuju Kota Depok maju
            berbudaya, sejahtera, juara lahir bathin.
          </p>

          <p>
            ”Semoga kehadiran Jabar Bergerak Kota Depok, dapat dirasakan oleh warga yang membutuhkan dan berharap semua
            warga Depok bahagia dan sejahtera lahir bathin,” kata istri Sekda Kota Depok, Supian Suri itu.
          </p>

          <p>
            Ketua Koperasi Kahiji Jaya Maju Bersama, Dian Nufarida mengatakan, ribuan liter minyak goreng dijual murah
            kepada masyarakat. “Program ini terus bergulir dari satu wilayah ke wilaya lain di Kota Depok,” kata Dian.
            (red)
          </p>

          <h2>Leave a Reply</h2>
          <span>Your email address will not be published. Required fields are marked *</span>

          <form action="" class="mt-3 mb-5">
            <div class="mb-2">
              <label for="comment">Comment <span class="text-danger">*</span></label>
              <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="mb-2">
              <label for="name">Name <span class="text-danger">*</span></label>
              <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
              <label for="email">Email <span class="text-danger">*</span></label>
              <input type="email" id="email" name="email" class="form-control">
            </div>
            <button class="btn btn-warning">POST COMMENT</button>
          </form>
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