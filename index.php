<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
  <!-- mystyle -->
  <link href="css/Style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>Dinarpusta Kota Kupang</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container">
      <a class="navbar-brand" href="#">
        <!-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
        Araspus Kupang</a>

      <button class="navbar-toggler border-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang kami
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuAbout">
              <li><a class="dropdown-item" href="#">Profil </a></li>
              <li><a class="dropdown-item" href="#">Sejarah </a></li>
              <li><a class="dropdown-item" href="#">Struktur Organisasi </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuPerpustakaan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Perpustakaan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuPerpustakaan">
              <li><a class="dropdown-item" href="#">Profil Perpustakaan</a></li>
              <li><a class="dropdown-item" href="#">Layanan Perpustakaan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuKearsipan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kearsipan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuKearsipan">
              <li><a class="dropdown-item" href="#">Profil Kearsipan</a></li>
              <li><a class="dropdown-item" href="#">Layanan Kearsipan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#contact">Kontak</a>
          </li>
        </ul>
        <div class="navbar-nav">
          <!-- <button class="button_primary">Daftar</button> -->
          <button class="button_secondary">Masuk</button>
        </div>
      </div>
    </div>
  </nav>
  <!-- hero section -->
  <section class="hero" id="hero">
    <!-- <img src="img/bookbg.jpg" alt="" class="position-absolute  end-0 buttom-0 hero_img"> -->
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 hero_tagline my-auto">
          <h1>Dinas <span>Kearsipan</span> dan <span>Perpustakaan</span> Kota Kupang</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, enim.</p>
          <a href="#layanan" class="button-lg-primary_titel">
            <button class="button-lg-primary">
              Selengkapnya
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- about Section -->
  <!-- Menu Section start -->
  <section id="layanan">
    <h2><span>Layanan</span> Kami</h2>
    <div class="container ">

      <!-- Navigasi untuk memilih layanan -->
      <div class="service-navigation">
        <button class="active" onclick="showService('perpustakaan')">Perpustakaan</button>
        <button class="" onclick="showService('kearsipan')">Kearsipan</button>
      </div>

      <!-- Layanan Perpustakaan -->
      <div id="perpustakaan" class=" service-section ">
        <div class="row m-auto ">
          <h4 class="library-title border-bottom">Perpustakaan </h4>
          <div class="col-md-4  ">
            <img src="img/book.jpg" alt="Perpustakaan" class="menu-card-img">
          </div>

          <div class="col-md-8 library-info d-flex flex-column justify-content-between">
            <p><strong>Alamat :</strong> Jln. Cikini Raya No. 73, Komplek Taman Ismail Marzuki, Jakarta Pusat</p>
            <p><strong>Lantai :</strong> 1</p>
            <p><strong>Jam Operasional:</strong></p>
            <ul>
              <li><strong>Senin-Kamis :</strong> 09.00 - 17.00 WIB</li>
              <li class="my-4"><strong>Jumat-Minggu :</strong> 09.00 - 20.00 WIB</li>
              <li class="my-4">(Checkin ditutup sementara 11.30 - 13.00 WIB)</li>
            </ul>
            <div class="closed-info ">
              <p>Tutup: Hari Libur Nasional dan Cuti Bersama</p>
            </div>
          </div>
          <div class="library-foter border-top">
            <button class=""><a href="" class="">lihat detail</a></button>
          </div>
        </div>
      </div>

      <!-- Layanan Kearsipan -->
      <div id="kearsipan" class="service-section" style="display: none;">
        <div class="row m-auto">
          <h4 class="library-title border-bottom">Kearsipan Jakarta - Cikini</h4>
          <div class="col-md-4  ">
            <img src="img/promosi.jpeg" alt="Perpustakaan" class="menu-card-img">
          </div>

          <div class="col-md-8 library-info d-flex flex-column justify-content-between">
            <p><strong>Alamat :</strong> Jln. Cikini Raya No. 73, Komplek Taman Ismail Marzuki, Jakarta Pusat</p>
            <p><strong>Lantai :</strong> 2</p>
            <p><strong>Jam Operasional:</strong></p>
            <ul>
              <li><strong>Senin-Kamis :</strong> 09.00 - 17.00 WIB</li>
              <li class="my-4"><strong>Jumat-Minggu :</strong> 09.00 - 20.00 WIB</li>
              <li class="my-4">(Checkin ditutup sementara 11.30 - 13.00 WIB)</li>
            </ul>
            <div class="closed-info ">
              <p>Tutup: Hari Libur Nasional dan Cuti Bersama</p>
            </div>
          </div>
          <div class="library-foter border-top">
            <button class=""><a href="" class="">lihat detail</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- artikel dan berita -->
  <section class="portal-berita" id="kegiatan">
    <div class="continer-fluid ">
      <div class="container">
        <h2 class="text-center mb-5">Kegiatan</h2>
        <div class="row">
          <!-- Carousel hanya tampil pada mode mobile -->
          <div id="carouselKegiatan" class="carousel slide d-lg-none" data-bs-ride="carousel">
            <div class="carousel-inner">
              <!-- Artikel 1 -->
              <div class="carousel-item active">
                <div class="card card_kegiatan h-100">
                  <div class="card_image">
                    <img src="img/bookbg.jpg" alt="Gambar Berita 1" class="card-img-top img-berita">
                  </div>
                  <div class="card-body">
                    <div class="info-header text-muted border-bottom mb-3">
                      <p class="text-muted"><i class="bi bi-calendar"></i> Rabu, 30 Oktober 2024</p>
                      <p class="text-muted"><i class="bi bi-person"></i> Thian Wisnu Isnanto</p>
                    </div>
                    <h5 class="card-title">MERICA: Membaca Buku Bermain Kriya bersama Duta Baca Warnai Hari Anak di SLB Negeri 8</h5>
                    <p class="card-text">Jakarta, 6 November 2024 – Perpustakaan Jakarta Utara menggelar acara MERICA...</p>
                  </div>
                  <div class="library-foter border-top">
                    <button class=""><a href="" class="">lihat detail</a></button>
                  </div>
                </div>
              </div>
              <!-- Artikel 2 -->
              <div class="carousel-item">
                <div class="card card_kegiatan h-100">
                  <div class="card_image">
                    <img src="img/promosi.jpeg" alt="Gambar Berita 2" class="card-img-top img-berita">
                  </div>
                  <div class="card-body">
                    <div class="info-header text-muted border-bottom mb-3">
                      <p class="text-muted"><i class="bi bi-calendar"></i> Rabu, 30 Oktober 2024</p>
                      <p class="text-muted"><i class="bi bi-person"></i> Thian Wisnu Isnanto</p>
                    </div>
                    <h5 class="card-title">Pelatihan Preservasi dan Konservasi Koleksi Sastra: Mengenali Serangga...</h5>
                    <p class="card-text">Jakarta—Selama hampir dua pekan, Unit Pengelola Perpustakaan Jakarta...</p>
                  </div>
                  <div class="library-foter border-top">
                    <button class=""><a href="" class="">lihat detail</a></button>
                  </div>
                </div>
              </div>
              <!-- Artikel 3 -->
              <div class="carousel-item">
                <div class="card card_kegiatan h-100">
                  <div class="card_image">
                    <img src="img/jumbotron-bg.jpg" alt="Gambar Berita 3" class="card-img-top img-berita">
                  </div>
                  <div class="card-body">
                    <div class="info-header text-muted border-bottom mb-3">
                      <p class="text-muted"><i class="bi bi-calendar"></i> Rabu, 30 Oktober 2024</p>
                      <p class="text-muted"><i class="bi bi-person"></i> Thian Wisnu Isnanto</p>
                    </div>
                    <h5 class="card-title">Kegiatan Kreasi Aksi Rekreasi Dongeng Keliling (KAREDOK) di SLB Negeri 9 Jakarta</h5>
                    <p class="card-text">Jakarta, 19 September 2024 – Kegiatan Kreasi Aksi Rekreasi Dongeng Keliling...</p>
                  </div>
                  <div class="library-foter border-top">
                    <button class=""><a href="" class="">lihat detail</a></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Controls for Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselKegiatan" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselKegiatan" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- Grid layout untuk mode desktop -->
          <div class="d-none d-lg-flex col-12">
            <div class="row">
              <div class="col-md-4 mb-4">
                <!-- Artikel 1 -->
                <div class="card card_kegiatan h-100">
                  <div class="card_image">
                    <img src="img/bookbg.jpg" alt="Gambar Berita 1" class="card-img-top img-berita">
                  </div>
                  <div class="card-body">
                    <div class="info-header text-muted border-bottom mb-3">
                      <p class="text-muted"><i class="bi bi-calendar"></i> Rabu, 30 Oktober 2024</p>
                      <p class="text-muted"><i class="bi bi-person"></i> Thian Wisnu Isnanto</p>
                    </div>
                    <h5 class="card-title">MERICA: Membaca Buku Bermain Kriya bersama Duta Baca Warnai Hari Anak di SLB Negeri 8</h5>
                    <p class="card-text">Jakarta, 6 November 2024 – Perpustakaan Jakarta Utara menggelar acara MERICA...</p>
                  </div>
                  <div class="library-foter border-top">
                    <button class=""><a href="" class="">lihat detail</a></button>
                  </div>
                </div>
              </div>
              <!-- Artikel 2 -->
              <div class="col-md-4 mb-4">
                <div class="card card_kegiatan h-100">
                  <div class="card_image">
                    <img src="img/promosi.jpeg" alt="Gambar Berita 2" class="card-img-top img-berita">
                  </div>
                  <div class="card-body">
                    <div class="info-header text-muted border-bottom mb-3">
                      <p class="text-muted"><i class="bi bi-calendar"></i> Rabu, 30 Oktober 2024</p>
                      <p class="text-muted"><i class="bi bi-person"></i> Thian Wisnu Isnanto</p>
                    </div>
                    <h5 class="card-title">Pelatihan Preservasi dan Konservasi Koleksi Sastra: Mengenali Serangga...</h5>
                    <p class="card-text">Jakarta—Selama hampir dua pekan, Unit Pengelola Perpustakaan Jakarta...</p>
                  </div>
                  <div class="library-foter border-top">
                    <button class=""><a href="" class="">lihat detail</a></button>
                  </div>
                </div>
              </div>
              <!-- Artikel 3 -->
              <div class="col-md-4 mb-4">
                <div class="card card_kegiatan h-100">
                  <div class="card_image">
                    <img src="img/jumbotron-bg.jpg" alt="Gambar Berita 3" class="card-img-top img-berita">
                  </div>
                  <div class="card-body">
                    <div class="info-header text-muted border-bottom mb-3">
                      <p class="text-muted"><i class="bi bi-calendar"></i> Rabu, 30 Oktober 2024</p>
                      <p class="text-muted"><i class="bi bi-person"></i> Thian Wisnu Isnanto</p>
                    </div>
                    <h5 class="card-title">Kegiatan Kreasi Aksi Rekreasi Dongeng Keliling (KAREDOK) di SLB Negeri 9 Jakarta</h5>
                    <p class="card-text">Jakarta, 19 September 2024 – Kegiatan Kreasi Aksi Rekreasi Dongeng Keliling...</p>
                  </div>
                  <div class="library-foter border-top">
                    <button class=""><a href="" class="">lihat detail</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fotter-section">
        <button class="button_semua_berita"><a href="" class="">Semua Kegiatan</a></button>
      </div>
    </div>
    </div>
  </section>

  <!-- kontak Section -->
  <section id="contact">
    <div class="container-fluid overlay h-100">
      <div class="container ">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <h3>Butuh konsultasi..?
              Silahkan Kontak Kami.
              Kami Siap Membantu
            </h3>
            <div class="kontak mt-3">
              <h6>Kontak</h6>
            </div>
            <div class="kontak">
              <a href="https://www.google.com/maps?q=Jl.+R.+W.+Monginsidi+No.3,+Pasir+Panjang,+Kec.+Kota+Lama,+Kota+Kupang,+Nusa+Tenggara+Tim." target="_blank">
                <i class="fas fa-map-marker-alt"></i> Jl. R. W. Monginsidi No.3, Pasir Panjang, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Tim.
              </a>
            </div>

            <div class="kontak">
              <a href="https://wa.me/081237788789" target="_blank">
                <i class="fab fa-whatsapp"></i> 081237788789
              </a>
            </div>

            <div class="kontak">
              <a href="mailto:arspuskpg@gmail.com">
                <i class="fas fa-envelope"></i> arspuskpg@gmail.com
              </a>
            </div>

            <div class="kontak mt-4">
              <h6>Media Sosial</h6>
            </div>
            <div class="social-icons">
              <a href="https://www.facebook.com/profile.php?id=100069371252712" target="_blank"><i class="fab fa-facebook-f me-4 "></i></a>
              <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram me-4 "></i></a>
              <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter me-4 "></i></a>

            </div>


          </div>
          <div class="col-md-6 m-auto ">
            <div class="card-contact ">
              <form action="">
                <h4>Ada Pertanyaan..?</h4>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Pesan</label>
                </div>
                <button type="submit" class="button_contact">Kirim Pesan</button>
              </form>
            </div>
          </div>

        </div>
        <div class="row gmap">
          <!-- <div class="col-md-12"> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.342761635182!2d123.60214357300359!3d-10.152768587323042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569de836b48afd%3A0x14faa4d8e96d8525!2sDinas%20Kearsipan%20Dan%20Perpustakaan%20Kota%20Kupang!5e0!3m2!1sid!2sid!4v1726416102762!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
  <!-- my script.js -->
  <script src="js/script.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>