<html>
<body style="background-image: url(fon.jpg); background-repeat: no-repeat; background-position: top center; background-attachment: fixed"></body>

<title>Пример сайта на php</title>
<link rel="stylesheet" type="text/css" href="style1.css"/>


<body>
<div class="header">
<h2 style="text-align:center">Главная страница</h2>
</div>
<div class="pages">
 <div class="content">
<h2>

<li><a href="razdel1.php">Раздел 1</a></li>
<li><a href="razdel2.php">Раздел 2</a></li>
<li><a href="razdel3.php">Раздел 3</a></li>

<br>
<br>
<br>



<?php
$filename = 'r1.txt';
$text = file_get_contents($filename);
$r1 = unserialize($text);
$l=$r1*100/5;
echo "По первому разделу: {$r1} ответов, {$l}% задания", '<br>';

$filename = 'r2.txt';
$text = file_get_contents($filename);
$r2 = unserialize($text);
$l=$r2*100/5;
echo "По второму разделу: {$r2} ответов, {$l}% задания", '<br>';

$filename = 'r3.txt';
$text = file_get_contents($filename);
$r3 = unserialize($text);
$l=$r3*100/5;
echo "По третьему разделу: {$r3} ответов, {$l}% задания", '<br>';


$x=$r1+$r2+$r3;
if ($x == 15)
  echo '<img src="uhu.jpg" WIDTH="764" HEIGHT="500">';

?>


</h2> 
</div>
 <div class="sidebar">
<ul>
<br></br>
</ul>
</div>
 <div class="foot">
</div>
</div>
<div class="footer">
<h2>Пройдите все тесты!</h2>
</div>
</body>
</body>
</html>