@extends('layout.master')
@section('content')

<div id="hero-img"></div>

  <section id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-5 py-4 d-md-none">
          <img src="img/about_1.jpg" class="img-fluid" alt="profile">
        </div>
        <div class="col-md-7 pb-5 pt-2">
          <h6>#POKOKNYAKITASENYUM</h6>
          <h1>Tentang <span>Raden Sri Wulandari</span></h1>
          <div class="">
            <p align="justify">
              Hj. Rd. Sri Wulandari, juga dikenal sebagai Coach Wulan, adalah seorang tokoh perempuan yang lahir di
              Cirebon pada tanggal 05 Juni 1974. Ia memiliki gelar S2 Bisnis Manajemen dari Universitas Gajah Mada.
              Coach Wulan memiliki pengalaman yang luas di bidang HR dan manajemen, antara lain sebagai CEO HR Academy,
              Ketua Yayasan Akademi Daya Manusia Indonesia, dan Founder Ruang Kreatif Oleholehku.id & HRA Studio. Selain
              itu, ia juga menjabat sebagai Ketua BMW (Batur Mba Wulan) UMKM Cirebon Indramayu, Founder YESPRENEUR UMKM,
              dan Founder HRA UMKM Komunitas.
            </p>
            <p align="justify">
              Sebelumnya, Coach Wulan juga pernah menjabat sebagai Direktur HRD di Hero
              Group, AJE, dan SC Johnson. Dengan pengalaman yang luas di bidang HR dan manajemen, Coach Wulan telah
              memberikan banyak kontribusi dalam membantu mengembangkan UMKM serta meningkatkan daya saing sumber daya
              manusia di Indonesia.
            </p>
          </div>
        </div>
        <div class="col-md-5 py-4 d-none d-md-block">
          <img src="img/about_1.jpg" class="img-fluid" alt="profile">
        </div>

        <!-- <div class="col-md-5 py-4">
          <img src="img/about_1.jpg" class="img-fluid" alt="profile">
        </div>
        <div class="col-md-7 py-5">
          <h6>#POKOKNYAKITASENYUM</h6>
          <h1>Tentang <span>Raden Sri Wulandari</span></h1>
          <div class="">
            <p align="justify">
              Dian Nurfarida adalah seorang politikus yang berasal dari Depok. Ia merupakan warga depok asli, lahir pada
              tanggal: 1 November 1976. Dian Nurfarida menempuh pendidikan dasar sampai menengah di Depok dan studinya
              di
              STIA YAPAN JAKARTA SELATAN (S1) dimana ia memperoleh gelar Bachelor of Social Science .
            </p>
            <p align="justify">
              Sebelum terjun ke dunia politik, Dian Nurfarida telah memiliki pengalaman kerja yang luas di bidang
              Management (Leadership), Dian dikenal sebagai pengusaha wanita yang sukses. Ia memimpin Baba Holding
              Company
              dengan 11 anak perusahaan di Indonesia dan Singapura.
            </p>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <section id="vismis">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 my-4">
          <div class="card">
            <div class="card-header">
              <!-- <i class="fa fa-heart"></i> <br> -->
              VISI & MISI
            </div>
            <div class="card-body">
              <p align="center">
                Mewujudkan Kota dan Kabupaten Cirebon dan Indramayu Sejahtera, Unggul, dan Religius.
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6 my-4">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-bullseye"></i> <br>
              MISI
            </div>
            <div class="card-body">
              <p>
                Mewakili aspirasi dan kepentingan masyarakat Kota Depok dengan melakukan koordinasi, pengawasan, serta
                pengambilan keputusan yang berpihak kepada kepentingan rakyat.
              </p>
              <p>
                Mengawasi, mengevaluasi dan mengawal kinerja pemerintah Kota Depok dalam menjalankan tugas dan tanggung
                jawabnya untuk mewujudkan kesejahteraan dan kemakmuran masyarakat.
              </p>
              <p>
                Membuat, mengevaluasi, dan mengawasi implementasi kebijakan publik yang pro-rakyat dan berpihak kepada
                kepentingan masyarakat Kota Depok.
              </p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- <section id="agenda">
    <div class="container py-5">
      <div class="text-center">
        <h1>3 Agenda Utama</h1>
        <span>Dalam membangun & memperjuangkan untuk ber-khidmat kepada Masyarakat</span>

        <div class="row pt-4">
          <div class="col-md-4 my-4">
            <div class="card">
              <div class="card-header">1</div>
              <div class="card-body">
                <p>Peningkatan kemampuan ekonomi dan sosial masyarakat melalui pengembangan jiwa kewirausahaan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-4">
            <div class="card">
              <div class="card-header">2</div>
              <div class="card-body">
                <p>Peningkatan pendidikan dengan mengintegrasi nilai keIslaman, keIndonesiaan dan basis teknologi bagi
                  Depok sebagai kota pendidikan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-4">
            <div class="card">
              <div class="card-header">3</div>
              <div class="card-body">
                <p>Peningkatan kemampuan bisnis UMKM menjadi global company menuju kota Depok sebagai kota pemukiman,
                  pendidikan, dan pusat bisnis dan investasi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section id="planWork">
    <div class="container py-5">
      <div class="text-center">
        <h1>Program Raden Sri Wulandari</h1>
        <div class="d-flex justify-content-center">
          <div class="divider">
            <span class="icon"><i class="fas fa-star"></i></span>
          </div>
        </div>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Program #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Membuat Ekonomi Keluarga Maju Sejahtera Melalui Program Wirausaha Baru dan Naik Kelas
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                Program #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Wujudkan Zona Integritas Cirebon Indramayu - menjadi zona Wilayah Bebas Korupsi (WBK)
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Program #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Memberikan Beasiswa Berprestasi bagi Keluarga yang Tidak Mampu
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Program #4
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Pelatihan Gratis Anak Muda Untuk Generasi Muda Siap Kerja
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Program #5
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Mewujudkan Religiusitas Masyarakat Melalui Bantuan Sarana dan Prasarana Pendukung
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Program #6
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Membuat Program Ketahanan Pangan Setiap Kecamatan
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Program #7
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Membangun Sekolah Formal dan Non Formal Sebagai Pondasi Pembangunan Masyarakat Setempat
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>

  <section id="gallery">
    <div class="container py-5">
      <div class="text-center">
        <h1>Raden Sri Wulandari - #Jagongan</h1>
      </div>

      <swiper-container class="mySwiper" pagination="true" pagination-type="fraction" effect="fade" grab-cursor="true">
        <swiper-slide>
          <img src="img/slide_1.jpg" alt="slide_1" class="img-fluid" loading="lazy">
        </swiper-slide>
        <swiper-slide>
          <img src="img/slide_2.jpg" alt="slide_2" class="img-fluid" loading="lazy">
        </swiper-slide>
        <swiper-slide>
          <img src="img/slide_3.jpg" alt="slide_3" class="img-fluid" loading="lazy">
        </swiper-slide>
      </swiper-container>

    </div>
  </section>

  <section id="blog">
    <div class="container py-5">
      <div class="text-center">
        <h1>Berita</h1>
        <span>Kegiatan - kegiatan yang dilakukan Raden Sri Wulandari</span>
      </div>

      <div class="row">
        <div class="col-md-4 d-none d-md-block">
          <div class="card my-4">
            <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
            <div class="card-body bg-white">
              <h5 class="card-title">
                <a href="{{ url('berita') }}">
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
        <div class="col-md-4">
          <div class="card my-4 d-none d-md-block">
            <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
            <div class="card-body bg-white">
              <h5 class="card-title">
                <a href="{{ url('berita') }}">
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
        <div class="col-md-4">
          <div class="card my-4 d-none d-md-block">
            <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
            <div class="card-body bg-white">
              <h5 class="card-title">
                <a href="{{ url('berita') }}">
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

      <div class="swiper d-md-none">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="card my-4">
              <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
              <div class="card-body bg-white">
                <h5 class="card-title">
                  <a href="{{ url('berita') }}">
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
          <div class="swiper-slide">
            <div class="card my-4">
              <img src="img/berita_1.jpg" class="card-img-top" alt="berita_1">
              <div class="card-body bg-white">
                <h5 class="card-title">
                  <a href="{{ url('berita') }}">
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
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </section>

  <section id="comment">
    <div class="container py-5">
      <div class="text-center">
        <h1>Berikan Aspirasi Terbaik Anda</h1>
      </div>

      <div class="row py-5">
        <div class="col-md-4 d-flex flex-column">
          <ul style="list-style: none; padding: 0px;">
            <li>
              <a href="">
                <i class="fa fa-brands fa-whatsapp icon"></i> 08xxxxxxxxxx
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-envelope icon"></i> halo@sriwulandari.com
              </a>
            </li>
          </ul>

          <form action="" class="px-2">
            <div class="mb-2">
              <label for="name">Nama Lengkap <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-2">
              <label for="no">No. Whatsapp</label>
              <input type="number" class="form-control" id="no" name="no">
            </div>
            <div class="mb-2">
              <label for="email">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="message">Pesan <span class="text-danger">*</span></label>
              <textarea name="message" id="message" cols="30" rows="0" class="form-control"></textarea>
            </div>
            <div class="mb-2">
              <button class="btn btn-warning">KIRIM PESAN</button>
            </div>
          </form>
        </div>
        <div class="col-md-8 mt-5">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.71964191616!2d106.9215278!3d-6.2400038!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d14b6b7a53b%3A0x453ea469195fd1c1!2sHR%20Academy%20Indonesia!5e0!3m2!1sid!2sid!4v1683085851570!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

  @stop