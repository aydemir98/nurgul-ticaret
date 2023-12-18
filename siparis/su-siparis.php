<?php
include 'baglanti.php';
//veritabanı bağlantısını açtık
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="" />
    <meta name="copyright" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title -->
    <title>Nurgül Ticaret</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/icofont.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
      </div>
    </div>
    <!-- End Preloader -->

    <!-- Get Pro Button -->

    <!-- Header Area -->
    <header class="header">
      <!-- Topbar -->
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-12"></div>
            <div class="col-lg-6 col-md-7 col-12">
              <!-- Top Contact -->
              <ul class="top-contact">
                <li>
                  <i class="icofont-whatsapp"></i
                  ><a
                    href="https://wa.me/905055555555?text=merhabalar, tüp ve su siparişi için bilgi alabilir miyim?"
                    target="_blank"
                    >+90 505 555 5555</a
                  >
                </li>
                <li>
                  <i class="icofont-email"></i
                  ><a target="_blank" href="mailto:iletisim@nurgulticaret.com"
                    >iletisim@nurgulticaret.com</a
                  >
                </li>
              </ul>
              <!-- End Top Contact -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Topbar -->
      <!-- Header Inner -->
      <div class="header-inner">
        <div class="container">
          <div class="inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-12">
                <!-- Start Logo -->
                <div class="logo">
                  <a href="/"><img src="img/logo.png" alt="#" /></a>
                </div>
                <!-- End Logo -->
                <!-- Mobile Nav -->
                <div class="mobile-nav"></div>
                <!-- End Mobile Nav -->
              </div>
              <div class="col-lg-7 col-md-9 col-12">
                <!-- Main Menu -->
                <div class="main-menu">
                  <nav class="navigation">
                    <ul class="nav menu">
                      <li><a href="/">Ana Sayfa </a></li>
                      <li><a href="#">Hakkımızda </a></li>
                      <li><a href="#">İletişim </a></li>
                    </ul>
                  </nav>
                </div>
                <!--/ End Main Menu -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Header Inner -->
    </header>
    <section class="pricing-table section">
      <div class="container">
        <div class="row">
          <!-- Single Table -->
          <?php
          $sql = "SELECT isim, fiyat, detay, aciklama1, aciklama2, aciklama3 FROM tbl_urun_su";
          $result = $conn->query($sql);
          
          // Verileri ekrana yazdırma
          if ($result->num_rows > 0) { //veri sıfırdan büyük ise...
              while($row = $result->fetch_assoc()) { //veriler okunduğu sürece döndür...
                ?>
                <div class="col-lg-4 col-md-12 col-12">
            <div class="single-table">
              <!-- Table Head -->
              <div class="table-head">
                <div class="icon">
                  <i class="icofont icofont-water-drop"></i>
                </div>
                <h4 class="title"><?php echo $row["isim"] ?></h4>
                <div class="price">
                  <p class="amount"><?php echo $row["fiyat"] ?>₺<span><?php echo $row["detay"] ?></span></p>
                </div>
              </div>
              <!-- Table List -->
              <ul class="table-list">
                <li><i class="icofont icofont-ui-check"></i>-<?php echo $row["aciklama1"] ?></li>
                <li>
                <i class="icofont icofont-ui-check"></i>-<?php echo $row["aciklama2"] ?></li>
                <li>
                <i class="icofont icofont-ui-check"></i>-<?php echo $row["aciklama3"] ?></li>
              </ul>
              <div class="table-bottom">
                <a class="btn" href="detay?kategori=su&cins=<?php echo $row['isim'] ?>&fiyat=<?php echo $row['fiyat'] ?>&detay=<?php echo $row['detay'] ?>">Satın Al</a>
              </div>
              <!-- Table Bottom -->
            </div>
          </div>
        
              
              <?php  }
          } else {
              echo "0 sonuç";
          }
          // Bağlantıyı kapat
          $conn->close();
          ?>
          
        </div>
      </div>
    </section>

    <!-- Footer Area -->
    <footer id="footer" class="footer">
      <!-- Footer Top -->

      <!--/ End Footer Top -->
      <!-- Copyright -->
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <div class="copyright-content">
                <p>
                  © Copyright 2023 | All Rights Reserved by
                  <a href="#" target="_blank">Nurgül Ticaret</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  </body>
</html>
