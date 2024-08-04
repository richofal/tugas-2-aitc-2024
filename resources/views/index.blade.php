<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas 1 AIC</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  </head>
  <body>
    <nav>
      <span id="cari-duit">
        <a class="brand" href="#">CariDuit</a>
      </span>
      <div class="navbar-menu">
        <span id="home">
          <a class="menu" href="#">Home</a>
        </span>
        <span id="pricing">
          <a class="menu" href="#">Pricing</a>
        </span>
        <span id="service">
          <a class="menu" href="#">Service</a>
        </span>
        <span id="contact">
          <a class="menu" href="#">Contact</a>
        </span>
        <span id="blog">
          <a class="menu" href="#">Blog</a>
        </span>
      </div>
    </nav>
    <section class="content">
      <div class="captions">
        <h2 id="halo-selamat-datang">Halo, Selamat Datang</h2>
        <h1 id="temukan">Temukan Pekerjaan Freelance Impianmu!</h1>
        <p id="bekerjalah">
          Bekerjalah di tempat yang membuatmu nyaman, Daftar Sekarang Gratis!
        </p>
      </div>
      <div class="img">
        <img id="elipse" src="Images/Ellipse 1.png" />
        <img id="rocket" src="Images/Vectary texture.png" />
        <img id="code" src="Images/Code_perspective_matte_s 1.png" />
        <img id="fire" src="Images/Fire_perspective_matte_s 1.png" />
        <img id="coin" src="Images/Coin_perspective_matte_s 1.png" />
      </div>
      <div class="container mt-5">
        <div class="button">
          <a class="btn btn-primary" id="daftar" href="#">Daftar</a>
          <a class="btn btn-primary" id="login" href="#">Login</a>
        </div>
      </div>
    </section>
    <section class="footer">
      <p>© 2024 Richo Febrian | All Rights Reserved</p>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
