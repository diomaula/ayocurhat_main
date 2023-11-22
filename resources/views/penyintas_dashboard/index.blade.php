<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ayo Curhat</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/5ac0916fe6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  </head>
  <body>
    <!-- Boostrap menu icon -->
    <nav class="navbar fixed-top position-sticky" style="background-color: #1876f2">
      <div class="container">
        <!-- navbar kiri -->
        <div class="nav-left">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="logo">
            <img src="images/logo_putih.png" />
          </div>
        </div>

        <!-- tengah -->
        <div class="nav-center">
          <h3>We Always with You</h3>
        </div>

        <!-- kanan -->
        <div class="nav-Right">
          <div class="search-box">
            <img src="images/search.png" />
            <input type="text" placeholder="search" />
          </div>
          <div class="nav-user-icon online">
            <img src="images/Simple Avatar.png" />
          </div>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img src="images/Logo_biru.png" width="50 px" />
            <button type="button" class="navbar-toggler" data-bs-dismiss="offcanvas" aria-label="Close">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
              <li class="nav-item">
                <div class="publicCurhat">
                  <img src="images/home-icon.png" />
                  <a class="nav-link active" aria-current="page" href="index.html">Public curhat</a>
                </div>
              </li>

              <li class="nav-item">
                <div class="PrivatCurhat">
                  <img src="images/private_icon.png" />
                  <a class="nav-link active" aria-current="page" href="#">Privat curhat</a>
                </div>
              </li>

              <li class="nav-item">
                <div class="Rules">
                  <img src="images/rules_icon.png" />
                  <a class="nav-link active" aria-current="page" href="rules.html">Rules</a>
                </div>
              </li>

              <li class="nav-item">
                <div class="Profile">
                  <img src="images/user_profile.png" />
                  <a class="nav-link active" aria-current="page" href="#">Profile</a>
                </div>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-------------------- main content------------------ -->
    <div class="container2">
      <div class="main-content">
        <div class="write-post-container">
          <div class="user-profile">
            <img src="images/Simple Avatar.png" />
            <div>
              <p>Makhluk tuhan</p>
              <small>public <i class="fa-solid fa-chevron-down"></i></small>
            </div>
          </div>

          <div class="post-input-container">
            <textarea rows="3" placeholder="What's on your mind, Makhluk"></textarea>
          </div>
        </div>

        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="images/chara icon-02.png" />
              <div>
                <p>Diana yupii</p>
                <span>June 24 2023, 13:40 pm</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>
          <p class="post-text">
            Tadi ada jadwal matkul tiba-tiba digedung B 454. Ruangannya diatas sendiri lagi, akhirnya ngos-ngosan dong naik tangga. Trus ditengah jalan mikir, kenapa poliwangi bangun gedung baru tapi lift di gedung B 454 ga pernah
            terealisasikan buat di bangun juga? padahal itu yang paling mendesak. Dosen juga bakalan nyaman jika mau datang ke kelas lantai 5.<a href="#">#stayhealthy</a><a href="#"> #Gedung 454</a>
          </p>
          <div class="post-row-one">
            <div class="icon">
              <div class="activity-icons-one">
                <img src="images/tabler_arrow-big-up.png" width="20px" /> 304
                <div class="arrow-down">
                  <img src="images/tabler_arrow-big-down.png" width="20px" />
                </div>
              </div>
              <div class="comment-icon">
                <div class="comment"><img src="images/comment.png" width="15px" />114</div>
              </div>
            </div>
            <div class="laporkan">
              <a href="#">laporkan</a>
            </div>
          </div>
        </div>

        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="images/chara icon-03.png" />
              <div>
                <p>Anonim</p>
                <span>June 24 2023, 13:40 pm</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>
          <p class="post-text">
            Nasib jadi mahasiswa yang rumahnya jauh dari kampus, udah nyampe kelas kok kosong. Cek grup Whatsapp ternyata dosennya ga jadi masuk, gini amat nasib. <a href="#">#mahasiswatabah</a><a href="#"> #generasisandwich</a>
          </p>
          <div class="post-row-one">
            <div class="icon">
              <div class="activity-icons-one">
                <img src="images/tabler_arrow-big-up.png" width="20px" /> 554
                <div class="arrow-down">
                  <img src="images/tabler_arrow-big-down.png" width="20px" />
                </div>
              </div>
              <div class="comment-icon">
                <div class="comment"><img src="images/comment.png" width="15px" />45</div>
              </div>
            </div>
            <div class="laporkan">
              <a href="#">laporkan</a>
            </div>
          </div>
        </div>

        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="images/chara icon-06.png" />
              <div>
                <p>Fahri akbar</p>
                <span>June 24 2023, 13:40 pm</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>
          <p class="post-text">Akan ada banyak gedung baru di POLIWANGI, pasti kedepannya poliwangin semakin maju infrastrukturnya dan semakin banyak peminatnya kedepannya</p>
          <div class="post-row-one">
            <div class="icon">
              <div class="activity-icons-one">
                <img src="images/tabler_arrow-big-up.png" width="20px" /> 264
                <div class="arrow-down">
                  <img src="images/tabler_arrow-big-down.png" width="20px" />
                </div>
              </div>
              <div class="comment-icon">
                <div class="comment"><img src="images/comment.png" width="15px" />5</div>
              </div>
            </div>
            <div class="laporkan">
              <a href="#">laporkan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-------------------- Right-sidebar------------------ -->
    <!-- <div class="Right-sidebar">
        <div class="sidebar-title">
          <h4>Events</h4>
          <a href="#">See All</a>
        </div>

        <div class="event">
          <div class="left-event">
            <h3>18</h3>
            <span>March</span>
          </div>
          <div class="Right-event">
            <h4>Social Medial</h4>
            <p><i class="fa-solid fa-location-dot"></i>Willson Tech Park</p>
            <a href="#">More Info</a>
          </div>
        </div>
        <div class="event">
          <div class="left-event">
            <h3>22</h3>
            <span>June</span>
          </div>
          <div class="Right-event">
            <h4>Mobile Marketing</h4>
            <p><i class="fa-solid fa-location-dot"></i>Willson Tech Park</p>
            <a href="#">More Info</a>
          </div>
        </div>

        <div class="sidebar-title">
          <h4>Conversation</h4>
          <a href="#">Hide Chat</a>
        </div>

        <div class="online-list">
          <div class="online">
            <img src="images/member-1.png" />
          </div>
          <p>Desi Kawai</p>
        </div>
        <div class="online-list">
          <div class="online">
            <img src="images/member-2.png" />
          </div>
          <p>Diki yang baik hati</p>
        </div>
        <div class="online-list">
          <div class="online">
            <img src="images/member-3.png" />
          </div>
          <p>Ziza Tengil</p>
        </div>
      </div> -->
  </body>
</html>
