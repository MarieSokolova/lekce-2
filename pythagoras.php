
<?php
$a = "2";
$b = "5";
$obdelnikobsah = $a * $b;
echo "Obsah obdélníku o stranách $a cm a $b cm je $obdelnikobsah cm2.";?>
<!doctype html>
<p><?php
$strana = "6";
$uhel = "60";
$vyska = sin(deg2rad($uhel))*$strana;
$trojuhelnikobsah = round(($vyska * $strana) / 2);
echo "Rovnostranný trojúhelník o straně délky $strana cm a úhlu $uhel stupňů je $trojuhelnikobsah cm2.";?></p>
