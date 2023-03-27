<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BKI HESAPLAYICI</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header class="mt-3 text-center row">

    <div class="col-sm-10 align-right">
	<hr>
      <h1 class="text-secondary " style="color:black">BEDEN KÜTLE İNDEKSİ HESAPLAMA</h1>
	  <hr>
    </div>
  </header>
  <div class="container mt-3">
    <form method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight" style="color:rgb(216, 35, 35)"></label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="weight" name="Kilo" placeholder="
          Kilonuzu kilogram olarak girin.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="height" name="BoyUzunluğu" type="number" placeholder="
          Boyunuzu santimetre olarak girin.">
        </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit" class="btn btn-primary btn-block" name="Hesapla"
          >BKI Hesaplama
        </button>
        </div>
      </div>
    </form>
    <div class="row"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">


      <?php
 function calculate($uzunluk, $kilo)
{
    $idealkilo = ($uzunluk - 100 - (($uzunluk - 150) / 4));
    $message1 = "İdeal kilonuzun üzerindesiniz kilo vermek ve ideal kilonuza ulaşmak için bunları yapabilirsiniz:<br>
        1) Gün içindeki hareketlerinizi arttırın.<br>
        2) Dengeli beslenin şeker tuz karbonhidrat tüketiminize dikkat edin <br>
        3) Geç saatlerde yemek yemeyin. <br>
        4) Daha çok su için. <br>
        5) Kilo vermek için doğal, işlenmemiş gıdaları tercih edin.";

    $message2 = "İdeal kilonuzun altınızdasınız kilo almak ve ideal kilonuza ulaşmak için bunları yapablirsiniz: <br>
        1)Sağlıklı Karbonhidratları Tercih Edin.<br>
        2)Yemekle Beraber Sıvı Tüketmeyin.<br>
        3)Sık Sık Beslenin. <br>
        4)Hacmi Küçük Kalorisi Yüksek Besinleri Tüketin. <br>
        5)Kaliteli bir uykuyu ihmal etmeyin <br>
        ";
    $fark = $idealkilo - $kilo;
    $index = ($kilo / $uzunluk / $uzunluk) * 10000;
    $bmiRounded = round($index, 1);

    if ($idealkilo - $kilo < 0) {
        echo "<h4>İdeal kilonuz = " . "$idealkilo" . "<br>" . "İdeal kilonuza ulaşmanız için vermeniz gereken " . abs($fark) . " kg kaldı </h4>";
        echo "<h4>$message1</h4>";
    } else {
        echo "<h4>İdeal kilonuz = " . "$idealkilo" . "<br>" . "İdeal kilonuza ulaşmanız için almanız gereken " . "$fark" . " kg kaldı </h4>";
        echo "<h4>$message2</h4>";
    }
}

//Boy-100-[(boy-150)/4] ideal kilo formulu

$uzunluk = filter_var(htmlentities(floatval($_POST['BoyUzunluğu'])), FILTER_SANITIZE_NUMBER_FLOAT);
$kilo = filter_var(htmlentities(floatval($_POST['Kilo'])), FILTER_SANITIZE_NUMBER_FLOAT);
calculate($uzunluk, $kilo);
?>

    </div>
    </div>
  </div>
</body>
</html>