<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KALORİ HESAPLA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../stylePages/kalori.css">
 

</head>

<body>
  <nav>
  <a href="../secim.html" style="position: absolute; top: 10px; right: 10px; padding: 30px 20px;  color:green; text-decoration: none;">Ana Sayfa</a>
    <div class="logo">
      <p><img src="../images/attachment_124010263-removebg-preview (1).png" alt=""></p>


    </div>
  </nav>




  <div class="sema">

    <header class="mt-3 text-center row">
      <div class="col-sm-10 align-right">

        <h4 class="text-secondary  " style="
      position: absolute;
      width: 521px;
      height: 40px;
      left: -30px;
      top: 19px;
      
      font-family: 'Rubik';
      font-style: normal;
      font-weight: 400;
      font-size: 32px;
      line-height: 40px;
      /* identical to box height, or 125% */
      
      letter-spacing: 0.1em;
      
      color: #000000;">Günlük Kalori Hesaplama</h4>

      </div>
    </header>
    <div class="container mt-3">
      <form method="POST">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="weight" style="color:rgb(216, 35, 35)"></label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="kilo" name="kilo" style="box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
          left: -1.8rem;
          top: 5rem;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;" placeholder="
          Kilonuzu kilogram olarak girin.">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)"></label>
          <div class="col-sm-10">
            <input class="form-control" id="boy" name="boy" type="number" style="box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
          left: -1.8rem;
          top: 8rem;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;" placeholder="
          Boyunuzu santimetre olarak girin.">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)"></label>
          <div class="col-sm-10">
            <input class="form-control" id="sex" name="sex" type="text" style="box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
          left: -1.8rem;
          top: 11rem;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;" placeholder="
          Cinsiyetinizi girin.">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)"></label>
          <div class="col-sm-10">
            <input class="form-control" id="yas" name="yas" type="number" style="box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
          left: -1.8rem;
          top: 14rem;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;" placeholder="
          Yaşınızı girin.">
          </div>
        </div>
      
        <div class="check" style=" 
        
        position: absolute;
        margin-left: 11rem;
        margin-top: 17rem;
        display:inline;
        

        ">
        
          <div class="form-check">
            <input class="form-check-input" type="radio" name="activity1" value="az_hareketli" id="az_hareketli">
            <label class="form-check-label" for="az_hareketli">
              Az hareketli
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="activity2" value="orta_hareketli" id="orta_hareketli">
            <label class="form-check-label" for="orta_hareketli">
              Orta hareketli
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="activity3" value="cok_hareketli" id="cok_hareketli">
            <label class="form-check-label" for="cok_hareketli">
              Çok hareketli
            </label>

          </div>
        </div>
        <div class="form-group mt-3 row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10 align-right">
            <button type="submit" style="position: absolute;
          width: 258px;
          height: 68px;
          left: 2rem;
          top: 23rem;
          
          background: #27A906;
          border-radius: 48px;" name="Hesapla">
              <h5 style="position: absolute;
          width: 130px;
          height: 40px;
          left: 90px;
          top: 12px;
          
          font-family: 'Rubik';
          font-style: normal;
          font-weight: 400;
          font-size: 30px;
          line-height: 40px;
          /* identical to box height, or 133% */
          
          letter-spacing: 0.1em;
          
          color: #FFFFFF;">Hesapla</h5>
            </button>
          </div>
        </div>
      </form>
      <div class="row"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
  <div class="sonuc2"  >
      <?php
function calculate($boy, $kilo,$sex,$yas){


    /* 
Erkekler için: BMR = (10 x ağırlık kg) + (6.25 x boy cm) - (5 x yaş) + 5
Kadınlar için: BMR = (10 x ağırlık kg) + (6.25 x boy cm) - (5 x yaş) - 161
    */
    $erkekkalori = 1655 +9.6*$kilo + 1.8*$boy -4.7*$yas;
    $kadinkalori = 766 +13.7*$kilo +5*$boy -6.8*$yas;
    if($_POST["sex"] == "erkek" && isset($_POST['activity1'])){
        echo round($erkekkalori*1.1,2);
    }
    elseif($_POST["sex"] == "erkek" && isset($_POST['activity2'])){
        echo round($erkekkalori*1.2,2);
    }
    elseif($_POST["sex"] == "erkek" && isset($_POST['activity3'])){
        echo round($erkekkalori*1.3,2);
    }
    elseif($_POST["sex"] == "kadın" && isset($_POST['activity1'])){
        echo round($kadinkalori*1.1,2);
    }
    elseif($_POST["sex"] == "kadın" && isset($_POST['activity2'])){
        echo round($kadinkalori*1.2,2);
    }
    elseif($_POST["sex"] == "kadın" && isset($_POST['activity3'])){
        echo round($erkekkalori*1.3,2);
    }
    else{
        echo "Lütfen cinsiyeti kadın veya erkek diye giriniz";
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
  </div>
  </div>
</body>

</html>