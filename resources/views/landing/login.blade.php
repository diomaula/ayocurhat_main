<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style_signup.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="logo-container">
        <img src="images/Logo_biru.png" width="30%" />
        <p>Kami Siap Mendukungmu Dalam Curhatmu, Ayo Bersama Menghadapit</p>
        
      </div>
      <form action="/login" method="post">
        @csrf
        <div class="content-login">
          <div class="input-box-login">
            <label for="nim">NIM</label>
            <input type="text" placeholder="masukkan nim" name="nim" id="nim" autofocus required />
          </div>
          <div class="input-box-login">
            <label for="password">Password</label>
            <input type="text" placeholder="masukkan password" name="password" id="password" autofocus required />
          </div>
        </div>
        <div class="button-container">
          <button><a href="tampilanAwal.html"></a>Selanjutnya</button>
        </div>
        <div class="note">
          <p>apakah anda belum punya akun? <a href="register">Sign Up</a></p>
        </div>
      </form>
    </div>
  </body>
</html>
