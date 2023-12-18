<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Sipariş Özeti</title>
</head>
<body>
<?php
if (isset($_GET['kategori']) && isset($_GET['cins']) && isset($_GET['fiyat']) && isset($_GET['detay'])) {
    $kategori = $_GET['kategori'];
    $cins = $_GET['cins'];
    $fiyat = $_GET['fiyat'];
    $detay = $_GET['detay'];
    
    
}
?>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 mt-5">
      <form id="multi-step-form" action="onay.php" method="post">
        <div id="step1" class="form-step">
          <h2>Sipariş Özeti</h2>
          <div class="form-group">
            <label for="name">Kategori:</label>
            <input type="text" class="form-control" name="kategori" value="<?php echo $kategori ?>" disabled required>
            <label for="name">Ürün Cinsi:</label>
            <input type="text" class="form-control" name="cins" value="<?php echo $cins ?>" disabled required>
            <label for="name">Ürün Detayı:</label>
            <input type="text" class="form-control" name="detay" value="<?php echo $detay ?>" disabled required>
            <label for="name">Fiyatı:</label>
            <input type="text" class="form-control" name="fiyat" value="<?php echo $fiyat ?>TL" disabled required>

            
          </div>
          <button type="button" class="btn btn-primary next-step">Devam Et</button>
        </div>

        <div id="step2" class="form-step">
          <h2>İletişim Bilgileri</h2>
          <div class="form-group">
          <div class="form-group">
            <label for="name">*Ad Soyad:</label>
            <input type="text" class="form-control" name="isim" placeholder="örn: Nurgül Açıkgöz" required>
            <label for="name">*Telefon Numarası:</label>
            <input type="tel" class="form-control" name="telefon" placeholder="örn: 505 555 0505" required>
            <label for="name">*Adres Başlığı:</label>
            <input type="text" class="form-control" name="baslik" placeholder="örn: Ev, İş" required>
            <label for="name">*Adres:</label>
            <textarea class="form-control" name="adres" cols="20" rows="5" placeholder="örn: Kemalpaşa Salim Dervişoğlu Caddesi, Oramiral Salim Dervişoğlu Cd., 41200 İzmit/Kocaeli"></textarea>
            
          </div>
          </div>
          <button type="button" class="btn btn-secondary prev-step">Geri Dön</button>
          <button type="button" class="btn btn-primary next-step">Devam Et</button>
        </div>

        <div id="step3" class="form-step">
          <h2>Ödeme Bilgileri</h2>
          <div class="form-group">
              <label for="cardNumber">Kart Numarası</label>
              <input type="text" class="form-control" id="cardNumber" placeholder="16 Haneli Kredi Kartı Numaranızı Giriniz" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="expirationDate">Son Kullanma Tarihi:</label>
                <input type="text" class="form-control" id="expirationDate" placeholder="MM/YY" required>
              </div>
              <div class="form-group col-md-6">
                <label for="cvv">CVV:</label>
                <input type="text" class="form-control" id="cvv" placeholder="CVV Kodunu Girin" required>
              </div>
            </div>
            <div class="form-group">
              <label for="cardHolder">Kartın Üzerindeki İsim:</label>
              <input type="text" class="form-control" id="cardHolder" placeholder="Kart Üstündeki İsminizi Giriniz" required>
            </div>
    
          <button type="button" class="btn btn-secondary prev-step">Geri Dön</button>
          <button type="submit" class="btn btn-success">Ödeme Yap</button>
          
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function () {
    var form = $("#multi-step-form");
    var steps = $(".form-step");

    steps.slice(1).hide();

    $(".next-step").on("click", function () {
      $(this).closest(".form-step").hide().next().show();
    });

    $(".prev-step").on("click", function () {
      $(this).closest(".form-step").hide().prev().show();
    });
  });
</script>

</body>
</html>
