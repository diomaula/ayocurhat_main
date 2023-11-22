<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ayo Curhat</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-w8iqmrXZ5+V+u6NzN5O7m4/yAjcVfzt3fnjflwuuFCRiP9uOgkfn4s1Gj+nKC8fY" crossorigin="anonymous" />

    <!-- My Style -->
    <link rel="stylesheet" href="css/styleAwal.css" />
  </head>

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">
        <img src="images/logo.png" width="60" height="60" alt="Logo" />
      </a>

      <div class="nav">
        <div class="navbar-nav">
          <a href="#home">Home</a>
          <a href="#features">Features</a>
          <a href="#rules">Rules</a>
          <a href="#about">About</a>
        </div>

        <div class="navbar-extra">
          <a href="login"><span id="login">Login</span></a>
          <a href="register"><span id="signup">Sign Up</span></a>
        </div>
      </div>

      <div class="navbar-menu">
        <a href="#menu" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <div class="row">
        <div class="content">
          <h1>AYO CURHAT BERSAMAKU!</h1>
          <p>
            Website "Ayo Curhat" adalah sebuah inovasi dalam bidang pelayanan yang dibuat oleh mahasiswa program studi Teknologi Rekayasa Perangkat Lunak yang bekerja sama dengan Majelis Permusyawaratan Mahasiswa (MPM) Politeknik Negeri
            Banyuwangi dengan tujuan menjadi wadah aspirasi bagi mahasiswa untuk menyampaikan kritik, saran, maupun keluhan secara langsung.
          </p>
          <a href="logIn.html" class="cta">Mulai Curhat</a>
        </div>
        <div class="home-img">
          <img src="images/home.png" />
        </div>
      </div>
    </section>
    <!-- Hero Section end -->

    <!-- Features Section start -->
    <section id="features" class="features">
      <h1>Fitur</h1>
      <div class="row">
        <div class="menu-card">
          <img src="images/public.png" class="menu-card-img" />
          <h3 class="menu-card-title">Curhat <br />Publik</h3>
        </div>
        <div class="menu-card">
          <img src="images/private1.png" class="menu-card-img" />
          <h3 class="menu-card-title">Curhat Private <br />Dengan Balasan</h3>
        </div>
        <div class="menu-card">
          <img src="images/private2.png" class="menu-card-img" />
          <h3 class="menu-card-title">Curhat Private</h3>
        </div>
      </div>
    </section>
    <!-- Features Section end -->

    <!-- Ulasan start -->
    <section id="review" class="review">
      <h1>Ulasan</h1>
      <p>
        Dengan adanya website Ayo Curhat, mahasiswa dapat dengan mudah menuliskan keluhan atau aspirasinya tanpa harus takut dan malu. Website ini menyediakan fitur-fitur pendukung seperti curhat publik untuk menyampaikan sesuatu secara
        publik agar mendapatkan feedback dari pengguna lainnya, serta curhat private untuk menyampaikan sesuatu secara rahasia tanpa diketahui oleh pengguna lainnya.
      </p>
      <div class="row">
        <div class="review-img">
          <img src="images/ulasan1.png" />
          <img src="images/ulasan2.png" />
          <img src="images/ulasan3.png" />
          <img src="images/ulasan4.png" />
        </div>
      </div>
    </section>
    <!-- Ulasan end -->

    <!-- Rules Section start -->
    <section id="rules" class="rules">
      <div class="row">
        <div class="rules-img">
          <img src="images/rules.png" />
        </div>
        <div class="content">
          <h1>Rules</h1>
          <p>
            Aturan ini digunakan untuk menjaga kenyamanan pengguna website Ayo Curhat. Pengguna diharapkan tidak menggunakan bahasa kasar, merendahkan, atau melakukan tindakan yang dapat merugikan dan mengganggu pihak lain. Termasuk segala
            bentuk pelecehan, ancaman, atau perilaku tidak pantas lainnya tidak dibenarkan.
          </p>
          <a href="rules.html" class="cta">Baca Rules</a>
        </div>
      </div>
    </section>
    <!-- Rules Section end -->

    <!-- Footer start -->
    <footer>
      <section id="about">
        <h1>Tentang Kami</h1>
        <div class="row">
          <div class="footer-img">
            <img src="images/footer.png" />
          </div>

          <div class="menu">
            <p style="margin-bottom: 18px">Halaman Utama</p>
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#rules">Rules</a>
            <a href="#about">About</a>
          </div>

          <div class="pelayanan" style="flex: 1 1 7%">
            <p style="margin-bottom: 18px" class="title">Pelayanan</p>
            <p style="margin-bottom: 5px">Aman</p>
            <p style="margin-bottom: 5px">Privasi</p>
            <p style="margin-bottom: 5px">Dukungan</p>
            <p style="margin-bottom: 5px">Komunikasi</p>
          </div>

          <div class="contact">
            <div class="address" style="display: flex">
              <a href="#" id="map"><i data-feather="map-pin"></i></a>
              <a style="padding-left: 10px" href="https://goo.gl/maps/8pnqYp4d56Lzh9Su7" id="map">Jalan Raya Jember No.KM13, Kawang, Labanasem, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur 68461</a>
            </div>
            <div class="email">
              <a href="#" id="email"><i data-feather="mail"></i></a>
              <a href="mailto:mpmpoliwangi@gmail.com" style="padding-left: 10px">mpmpoliwangi@gmail.com</a>
            </div>
            <div class="social-media">
              <a href="#" id="instagram"><i data-feather="instagram"></i></a>
              <a href="https://instagram.com/mpmpoliwangi" style="padding-left: 10px" id="instagram">mpmpoliwangi</a>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <!-- Footer end -->

    <!-- Feather Icons-->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
