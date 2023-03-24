<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PROTEİN HESAPLA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
  <header class="mt-3 text-center row">

    <div class="col-sm-10 align-right">
	<hr>
      <h1 class="text-secondary " style="color:black">Günlük Protein Hesaplama</h1>
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
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit" class="btn btn-primary btn-block" name="Hesapla"
          > Hesapla
        </button>
        </div>
      </div>
    </form>
    <div class="row"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
      <?php
function calculate($boy, $kilo ,$sex)
{
  /*
Yağsız Vücut Ağırlığı (ERKEK): = (0.73 * Boy[cm]) – 59.42
Yağsız Vücut Ağırlığı (KADIN):= (0.65 * Boy[cm]) – 50.74
 yağsız vücut ağırlığının 2,75 katı
  */
  $erkekyagsizagirlik= (0.73 * $boy) -59.42;
  $kadinyagsizagirlik= (0.65 * $boy) -50.74;
  if ($_POST['sex'] == "erkek"){
    echo "Günlük protein ihtiyacınız : ".round($erkekyagsizagirlik *1.50,1). " gr ile " . round($erkekyagsizagirlik*2.50,1)." gr arasında";

  }
  elseif ($_POST['sex'] == "kadın"){
    echo  "Günlük protein ihtiyacınız : ".$kadinyagsizagirlik*2.50 . " gr ile " . $kadinyagsizagirlik*1.50." gr arasında";
  }
  else{
    echo "Lütfen cinsiyeti kadın veya erkek olarak giriniz";
  }
}

//Boy-100-[(boy-150)/4] ideal kilo formulu

$boy= filter_var(htmlentities(floatval($_POST['boy'])), FILTER_SANITIZE_NUMBER_FLOAT);
$kilo = filter_var(htmlentities(floatval($_POST['kilo'])), FILTER_SANITIZE_NUMBER_FLOAT);
$sex = $_POST['sex'];
calculate($boy, $kilo ,$sex);
?>

    </div>
    </div>
  </div>
</body>
</html>