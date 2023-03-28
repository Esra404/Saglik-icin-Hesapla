<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PROTEİN HESAPLA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../stylePages/proteinihtiyacı.css">

</head>
<body>
</head>
<body>
 
  <nav>
  <a href="../secim.html" style="position: absolute; top: 10px; right: 10px; padding: 30px 20px;  color:green; text-decoration: none;">Ana Sayfa</a>
    <div class="logo">
      <p><img src="../images/attachment_124010263-removebg-preview (1).png" alt=""></p>
      

    </div>
  </nav>

  <header >

    <div class="sema">
    <header class="mt-3 text-center row">
    <div class="col-sm-10 align-right">
      <h4>Günlük Protein Hesaplama</h4>
      </div>
  </header>
    </div>
  
  <div class="container mt-3">
    <form method="POST">
      
       <div class="kutu1 ">
     
          <input type="number" class="form-control" id="kilo" name="kilo" style="margin-top: 6rem;" placeholder="Kilonuzu kilogram olarak girin.">
       
      
          <input class="form-control" id="boy" name="boy" type="number" style="margin-top: 12rem;" placeholder="Boyunuzu santimetre olarak girin.">
      
          <input class="form-control" id="sex" name="sex" type="text" style="margin-top: 18rem;" placeholder="Cinsiyetinizi girin.">
        </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button
          > <h5>Hesapla</h5>
        </button>
        </div>
      </div>
    </form>
  </header>
    <div class="row"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
<div class=" sonuc">
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
    echo "Günlük Protein İhtiyacınız : ".round($erkekyagsizagirlik *1.50,1). " gr ile " . round($erkekyagsizagirlik*2.50,1)." gr arasında";

  }
  elseif ($_POST['sex'] == "kadın"){
    echo  "Günlük Protein İhtiyacınız : ".$kadinyagsizagirlik*2.50 . " gr ile " . $kadinyagsizagirlik*1.50." gr arasında";
  }
  else{
    echo "Lütfen Cinsiyeti Kadın veya Erkek Olarak Giriniz";
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
  </div>
</body>
</html>