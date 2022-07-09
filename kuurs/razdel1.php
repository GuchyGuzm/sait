<html>
<body style="background-image: url(fon.jpg); background-repeat: no-repeat; background-position: top center; background-attachment: fixed"></body>

<title>Пример сайта на php</title>
<link rel="stylesheet" type="text/css" href="style.css"/>


<body>
<div class="header">
<h2 style="text-align:center"><li><a href="online_test.php">На главную</a></li></h2>
</div>
<div class="pages">
 <div class="content">
<h2>


<form method='get'>
<title>Онлайн тест</title>

1.Чему равна американская тонна?<br> 
<img src='1-1.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[0]" type="radio" value="Неверно">500 фунтов<br>
<input name="answer[0]" type="radio" value="Неверно">1000 фунтов<br>
<input name="answer[0]" type="radio" value="Верно">2000 фунтов<br>
<br>
2.Что означает слово “червонное” в словосочетании “червонное золото”?<br>
<img src='1-2.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[1]" type="radio" value="Верно">Чистое<br>
<input name="answer[1]" type="radio" value="Неверно">Чёрноё<br>
<input name="answer[1]" type="radio" value="Неверно">Ворованное<br>
<br>
3.Какой цвет получится, если смешать синий и красный?<br>
<img src='1-3.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[2]" type="radio" value="Верно">Фиолетовый<br>
<input name="answer[2]" type="radio" value="Неверно">Коричневый<br>
<input name="answer[2]" type="radio" value="Неверно">Бордовый<br>
<br>
4.Какую шахматную фигуру называют “королевой”?<br>
<img src='1-4.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[3]" type="radio" value="Верно">Ферзь<br>
<input name="answer[3]" type="radio" value="Неверно">Ладья<br>
<input name="answer[3]" type="radio" value="Неверно">Слон<br>
<br>
5.Какой орган человека не функционирует до его рождения?<br>
<img src='1-5.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[4]" type="radio" value="Неверно">Печень<br>
<input name="answer[4]" type="radio" value="Верно">Лёгкие<br>
<input name="answer[4]" type="radio" value="Неверно">Желудок<br>
<br>


<p><input href="#otv" type='submit' name="Submit" value='Отправить'></p>
<p><a name="otv"></a></p>
<br>


<?php
$k=0;
$n=0;

   if (is_array($_GET['answer'])){
   foreach($_GET['answer'] as $value) 
        {
         if ($value=='Верно') { 
         $k=$k+1;
		 
        }
		$n=$n+1;
		echo $n;
		echo ".";
        echo $value, '<br>'; 
        }
  echo "У вас {$k} правильных ответов", '<br>'; 
      }
?>

</form>



</h2> 
</div>
 <div class="sidebar">
<ul>

<div style="width:90px; border-bottom:3px solid #FF0000; padding-left:10px">
Уровни сложности тестов
</div>

<li><a href="razdel1.php">Раздел 1</a></li>
<li><a href="razdel2.php">Раздел 2</a></li>
<li><a href="razdel3.php">Раздел 3</a></li>
</ul>
</div>
 <div class="foot">
</div>
</div>
<div class="footer">

<br>

<?php
//это наш массив (или объект)
$r1 = $k;
$l=$k*100/5;

$filename = 'r1.txt';
$text = serialize($r1); //сериализация
//записываем текст в файл
file_put_contents($filename, $text);
/*
//потом его можно прочитать из файла
$text = file_get_contents($filename);
//восстановить массив из текстового представления
$arr = unserialize($text);
*/

echo "{$r1} ответов, {$l}% задания", '<br>';
?>



</br>


</div>
</body>
</body>
</html>