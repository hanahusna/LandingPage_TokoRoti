<?php
require 'functions.php';
$eat = query("SELECT * FROM eatdrink");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Landing Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="homepage.css">
</head>

<body>

  <!-- Links (sit on top) -->
  <div class="w3-top">
    <div class="w3-row w3-padding w3-blue-grey">
      <div class="w3-col s2">
        <a href="#" class="w3-button w3-block">HOME</a>
      </div>
      <div class="w3-col s2">
        <a href="#about" class="w3-button w3-block">ABOUT</a>
      </div>
      <div class="w3-col s2">
        <a href="#menu" class="w3-button w3-block">OUR MENU</a>
      </div>
      <div class="w3-col s2">
        <a href="#contact" class="w3-button w3-block">CONTACT</a>
      </div>
      <div class="w3-col s2">
        <a href="#reserve" class="w3-button w3-block">RESERVATION</a>
      </div>
      <div class="w3-col s2">
        <a href="index.php" class="w3-button w3-block">LOGIN</a>
      </div>
    </div>
  </div>

  <!-- Header with image -->
  <header class="bgimg w3-display-container" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">Buka dari jam 15.00 - 22.00</span>
    </div>
    <div class="w3-display-middle w3-center">
      <span class="w3-text-amber" style="font-size:90px; font-family:lucida handwriting; line-height: 1,1;">Arcla's<br>Bakery and Cafe</span>
      <h4 class="w3-text-white" style="font-size:25px; font-family: segoe script;">Datang dan nikmati suasana hangat nan manis ditempat kami</h4>
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      <span class="w3-tag">Jalan Alpukat No.29, Bandung</span>
    </div>
  </header>

  <!-- Add a background color and large text to the whole page -->
  <div class="background">

    <!-- About Container -->
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:900px">
        <h3 class="w3-center w3-padding-48"><span class="w3-tag" style="font-size: larger; font-family: lucida calligraphy;">About Arcla's Bakery and Cafe</span></h3>
        <p style="font-size: x-large; text-align: justify; margin-top: 1px;">Arcla's Bakery and Cafe merupakan perpaduan
          antara toko roti dan kafe. Arcla's Bakery and Cafe didirikan pada tahun 2016
          oleh Arcla dan Audy. Kami menyajikan berbagai jenis roti seperti pastry, croissant dan roti dengan bahan
          premium lainnya. Tidak hanya roti saja, menu espresso dan brew bar kami yang lengkap juga tersedia disini.
          Sehingga pengunjung dapat menikmati suasana nyaman di tempat kami ditemani secangkir kopi dan roti dengan
          bahan terbaik. Selain itu, kami juga menyajikan menu yang dibuat sesuai pesanan, serta pilihan makanan pendamping, salad,
          serta menu andalan lainnya.
        </p>
        <div class="w3-panel w3-centerbar w3-brown w3-text-white">
          <p style="font-size: large; text-align: justify;"><i>"Menggunakan bahan-bahan premium, berkualitas tinggi,
              segar serta diolah dengan sepenuh hati agar dapat menyajikan makanan dan minuman yang kaya akan cita
              rasa."</i></p>
          <p align="center">- Mikayla Finn, Head Chef Arcla's Bakery and Cafe</p>
        </div>
        <div class="slideshow-container">
          <div class="mySlides">
            <div class="numbertext w3-tag">1 / 2</div>
            <img src="images/andy-li-RndRFJ1v1kk-unsplash.jpg" style="width:100%;max-width:1000px;">
          </div>
          <div class="mySlides">
            <div class="numbertext w3-tag">2 / 2</div>
            <img src="images/rr-abrot-pNIgH0y3upM-unsplash.jpg" style="width:100%;max-width:1000px">
          </div>
          <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
              }
              slideIndex++;
              if (slideIndex > slides.length) {
                slideIndex = 1
              }
              slides[slideIndex - 1].style.display = "block";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
          </script>
          <p align="center" style="font-size:x-large;" class="w3-margin-top">Buka dari jam 09.00 sampai 17.00 untuk hari <strong>Senin - Jumat</strong></p>
          <p align="center" style="font-size:x-large; line-height: 1;" class="w3-margin-top">Buka dari jam 15 .00 sampai 22.00 khusus untuk hari <strong>Sabtu - Minggu</strong></p>
        </div>
      </div>

      <!-- Menu Container -->
      <div class="w3-container" id="menu">
        <div class="w3-content" style="max-width:900px">
          <h3 class="w3-center w3-padding-48"><span class="w3-tag" style="font-size: larger; font-family: lucida calligraphy;">Our Menu</span></h3>
          <table border="1" cellpadding="10" cellspacing="0" align="center" style="font-size: x-large;">
            <tr style="background-color:burlywood;" align="center">
              <th>No</th>
              <th>Gambar</th>
              <th>Makanan/Minuman</th>
              <th>Keterangan</th>
              <th>Harga</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($eat as $row) : ?>
              <tr align="center">
                <td><?= $i; ?></td>
                <td><img src="images/<?= $row["gambar"]; ?>" width="200"></td>
                <td><?= $row["fnb"]; ?></td>
                <td><?= $row["ket"]; ?></td>
                <td><?= $row["harga"]; ?></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </table>

          <!-- Grid for photos -->
          <br><br><br>
          <div class="row">
            <img src="images/prakash-meghani-07bBNmiV7ag-unsplash.jpg" style="width:100%; margin-bottom:12px;">
            <div class="column w3-row-padding">
              <img src="images/corretto.jpg" style="width:100%">
              <img src="images/cocktail.jpg" style="width:100%">
            </div>
            <div class="column w3-row-padding">
              <img src="images/mocca latte.jpg" style="width:100%;">
              <img src="images/fruit juice.jpg" style="width:100%">
            </div>
            <div class="column w3-row-padding">
              <img src="images/iced chocolate.jpg" style="width:100%">
              <img src="images/strawberry milkshake.jpg" style="width:100%;">
            </div>
            <img src="images/food table.jpg" style="width:100%">
          </div>
        </div>
      </div>

      <!-- Contact Container -->
      <div class="w3-container" id="contact" style="padding-bottom:32px;">
        <div class="w3-content" style="max-width:900px">
          <h3 class="w3-center w3-padding-48"><span class="w3-tag" style="font-size: larger; font-family: lucida calligraphy;">Contact</span></h3>
          <p style="font-size: x-large;" align="center">Anda bisa menghubungi kami melalui kontak berikut:</p>
          <div class="w3-section" style="background-color: plum;">
            <p align="center" style="font-size:x-large;"><i class="fa fa-map-marker fa-fw w3-text-red w3-xxlarge w3-margin-right w3-margin-top"></i>Jalan Alpukat No. 29 Bandung, Jawa Barat</p>
            <p align="center" style="font-size:x-large;"><i class="fa fa-envelope fa-fw w3-text-orange w3-xxlarge w3-margin-right"> </i>arclabakerycafe@gmail.com</p>
            <p align="center" style="font-size:x-large;"><i class="fa fa-facebook fa-fw w3-text-blue w3-xxlarge w3-margin-right"> </i>Arcla's Bakery Cafe</p>
            <p align="center" style="font-size:x-large;"><i class="fa fa-instagram fa-fw w3-text-pink w3-xxlarge w3-margin-right"> </i>@arclabakerycafe</p>
            <p align="center" style="font-size:x-large;"><i class="fa fa-phone fa-fw w3-text-green w3-xxlarge w3-margin-right w3-margin-bottom"></i>+6210203675493</p>
          </div>
          <p style="font-size: x-large; text-align: justify;"><span class="w3-tag w3-margin-top">For Your Information!</span>
            Kami menawarkan katering layanan lengkap untuk acara apapun, besar atau kecil. Kami mengerti
            kebutuhan anda dan kami akan melayani dan memenuhi kriteria dari semuanya, baik tampilan maupun rasa.</p>
          <img src="images/bruno-martins-DrhYt-kAe9s-unsplash.jpg" class="w3-image w3-margin-top" style="width:100%">

          <!-- Reservation Container -->
          <h3 class="w3-center w3-padding-48" id="reserve"><span class="w3-tag" style="font-size: larger; font-family: lucida calligraphy;">Reservation</span></h3>
          <p style="font-size: x-large;" align="center">Segera Reservasi meja spesial untuk hari ini!</p>
          <form method="post" action="actionreserve.php">
            <p style="font-size: x-large;"><input class="w3-input w3-padding-16 w3-border" type="text" name="nama" placeholder="Nama" required></p>
            <p style="font-size: x-large;"><input class="w3-input w3-padding-16 w3-border" type="number" name="jumlah" placeholder="Jumlah orang" required></p>
            <p style="font-size: x-large;"><input class="w3-input w3-padding-16 w3-border" type="datetime-local" name="tanggal" placeholder="Tanggal dan waktu" required value="2020-11-16T20:00"></p>
            <p style="font-size: x-large;"><input class="w3-input w3-padding-16 w3-border" type="text" name="pesan" placeholder="Pesan atau permintaan spesial" required></p>
            <p align="center" style="font-size: x-large;"><button class="w3-button w3-black" type="submit">KIRIM</button></p>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-blue-grey w3-padding w3-large">
      <p>Created by Hana Husna Safitri 213010503004</p>
    </footer>
</body>

</html>