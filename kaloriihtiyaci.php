<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KALORİ HESAPLA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<a href="anasayfa.html" style="position: absolute; top: 10px; right: 10px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none;">Ana Sayfa</a>
  <header class="mt-3 text-center row">
    <div class="col-sm-10 align-right">
	<hr>
      <h1 class="text-secondary " style="color:black">Günlük Kalori Hesaplama</h1>
	  <hr>
    </div>
  </header>
  <div class="container mt-3">
    <form method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight" style="color:rgb(216, 35, 35)"></label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="kilo" name="kilo" placeholder="
          Kilonuzu kilogram olarak girin.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="boy" name="boy" type="number" placeholder="
          Boyunuzu santimetre olarak girin.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="sex" name="sex" type="text" placeholder="
          Cinsiyetinizi girin.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="yas" name="yas" type="number" placeholder="
          Yaşınızı girin.">
        </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit" class="btn btn-primary btn-block" name="Hesapla"
          >Hesapla
        </button>
        </div>
      </div>
    </form>
    <div class="row"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
      <?php
function calculate($boy, $kilo,$sex,$yas)

{
    /* 
Erkekler için: BMR = (10 x ağırlık kg) + (6.25 x boy cm) - (5 x yaş) + 5
Kadınlar için: BMR = (10 x ağırlık kg) + (6.25 x boy cm) - (5 x yaş) - 161
    */
    $erkekkalori = 1655 +9.6*$kilo + 1.8*$boy -4.7*$yas;
    $kadinkalori = 766 +13.7*$kilo +5*$boy -6.8*$yas;
    if($_POST["sex"] == "erkek"){
        echo round($erkekkalori,2);
    }
    elseif($_POST["sex"] == "kadın"){
        echo round($kadinkalori,2);
    }
    else{
        echo "Lütfen cinsiyeti kadın veya erkek olarak girin";
    }
   

}

/*
Kadınlarda: 655 + 9,6 X (kg cinsinden ağırlık) + 1,8 X (santim cinsinden boy) - 4,7 X (yaş)
Erkeklerde: 66 + 13,7 X (kg cinsinden ağırlık) + 5 X (santim cinsinden boy) - 6,8 X (yaş)
*/
$boy = filter_var(htmlentities(floatval($_POST['boy'])), FILTER_SANITIZE_NUMBER_FLOAT);
$kilo = filter_var(htmlentities(floatval($_POST['kilo'])), FILTER_SANITIZE_NUMBER_FLOAT);
$sex = $_POST['sex'];
$yas = $_POST['yas'];
calculate($boy, $kilo ,$sex,$yas);
?>

    </div>
    </div>
  </div>
</body>
</html>