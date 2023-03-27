<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BKI HESAPLAYICI</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../stylePages/yagOrani.css">
</head>
<body>

  <nav>
    <div class="logo">
      <p><img src="../images/attachment_124010263-removebg-preview (1).png" alt=""></p>
      

    </div>
  </nav>
<header>
<div class="sema">
  <header class="mt-3 text-center row">
    <div class="col-sm-10 align-right">
	
      <h4 class="text-secondary  ">YAĞ ORANI HESAPLAMA</h4>
	  
    </div>
  </header>
  <div class="container mt-3">
    <form method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight" style="color:rgb(216, 35, 35)"></label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="boy" name="boy" style="box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
         margin-top:6rem;
         margin-left: -3rem;
          
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;" placeholder="
         Boyunuzu  giriniz (cm)">
        </div>
</div>


      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="boyuncevresi" name="boyun"    style=" box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
          margin-top:10rem;
         margin-left: -3rem;
          
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;"       type="number" placeholder="
         Boyun Çevrenizi Giriniz (cm)">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="kalcacevresi" name="kalca" type="number" style="box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
          margin-top:14rem;
         margin-left: -3rem;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;" placeholder="
          Kalça Çevrenizi Giriniz (cm)">
        </div>
</div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="bel" name="bel" type="number" style="box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
          margin-top:18rem;
         margin-left: -3rem;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;" placeholder="
          Bel Çevrenizi Girin (cm)">
        </div>
        

      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:rgb(210, 29, 29)" ></label>
        <div class="col-sm-10">
          <input class="form-control" id="sex" name="sex" type="text"  style="box-sizing: border-box;

          position: absolute;
          width: 400px;
          height: 63px;
          margin-top:22rem;
         margin-left: -3rem;
          
          background: #EDEDED;
          border: 1px solid #000000;
          border-radius: 50px;" placeholder="
          Cinsiyetinizi Girin .">
        </div>
      </div>

      </div>
        <br>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit" style="position: absolute;
          width: 258px;
          height: 68px;
          margin-top :23rem;
         margin-left: 2rem;
          
          background: #27A906;
          border-radius: 48px;" name="Hesapla"
          > <h5 style="
          position: absolute;
          width: 130px;
          height: 40px;
          margin-top :-1.4rem;
         margin-left: 2.7rem;
          
          
          font-family: 'Rubik';
          font-style: normal;
          font-weight: 400;
          font-size: 30px;
          line-height: 40px;
          /* identical to box height, or 133% */
          
          letter-spacing: 0.1em;
          
          color: #ffffff;"> Hesapla</h5>
        </button>
        </div>
      </div>
</div>
    </form>
    <div class="row"></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
</div>
<div>
  <!--   
      <?php
/*

                                   bel - kalca - boyun
WOMEN % body fat = 163.205 x log10 (waist + hip – neck) – 97.684 x log10 (height) – 78.387 
MAN  % body fat = 86.010 x log10 (abdomen – neck) – 70.041 x log10 (height) + 36.76  
 */
function calculate($boy, $bel, $boyun,$sex, $kalca)
{
  $kadinyağorani = 163.205 * log10($bel + $kalca - $boyun) - 97.684 * log10($boy) - 88.387;
  $erkekyagorani = 86.010 *log10($bel - $boyun) - 70.041 * log10($boy) + 36.76 ;
  if ($_POST['sex']== "erkek"){
    echo "Yağ oranı sonucunuz :". round($erkekyagorani ,2);
  }
  elseif($_POST['sex']== "kadın"){
    echo "Yağ oranı sonucunuz :". round($kadinyağorani ,2);
  }
  else{
    echo "Lütfen cinsiyeti kadın veya erkek olarak girin";
  }
}
$boy = filter_var(htmlentities(floatval($_POST['boy'])), FILTER_SANITIZE_NUMBER_FLOAT);
$boyun = filter_var(htmlentities(floatval($_POST['boyun'])));
$bel = filter_var(htmlentities(floatval($_POST['bel'])));
$kalca = filter_var(htmlentities(floatval($_POST['kalca'])));
$sex = $_POST['sex'];
calculate($boy, $bel, $boyun, $sex,$kalca);
?>






-->
</div>
    </div>
    </div>
  </div>
</div>
</header>
</body>
</html>