<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

 /* VUCUT YAĞ ORANI HESAPLAM FORULU 
   WOMEN % body fat = 163.205 x log10 (waist + hip – neck) – 97.684 x log10 (height) – 78.387 
   MAN  % body fat = 86.010 x log10 (abdomen – neck) – 70.041 x log10 (height) + 36.76 

        inputs:
    *sex
    *kilo
    *boy
    *boyun cevresi
    *bel cevresi
    *kalca cevresi     
 */

 /*
Erkekler için bazal metabolizma hızı = 66.5 + (13.75 x vücut ağırlığınız (kg)) + (5 x boyunuz (cm.)) - (6.77 x yaş)
Kadınlar için bazal metabolizma hızı = 655.1 + (9.56 x vücut ağırlığınız (kg)) + (1.85 x boyunuz (cm.)) - (4.67 x yaş)

        inputs :
    *sex
    *yaş
    *boy
    *kilo
 */ 

 /* gunluk protein ıhtıyacı hesaplama 
Yağsız Vücut Ağırlığı (ERKEK): = (0.73 * Boy[cm]) – 59.42
Yağsız Vücut Ağırlığı (KADIN):= (0.65 * Boy[cm]) – 50.74
 yağsız vücut ağırlığının 2,75 katı
        inputs:
    
    *sex
    *boy
    *kilo
 */

  /* ideal kilo hesaplama 
Erkekler için ideal kilo hesaplama formülü: 50 +2.3 x ((boy (cm) / 2.54) -60)
Kadınlar için ideal kilo hesaplama formülü: 45.5+2.3 x ((boy (cm) / 2.54) -60)
        inputs:

    *sex
    *boy
    *kilo
  */ 
 ?>





</body>
</html>