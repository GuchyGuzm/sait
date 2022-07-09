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


  


1.Какой город лидирует по процентам площади, занимаемой музеями?<br> 
<img src='3-1.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[0]" type="radio" value="Неверно">Берлин<br>
<input name="answer[0]" type="radio" value="Верно">Загреб<br>
<input name="answer[0]" type="radio" value="Неверно">Вена<br>
2.В какой стране мира меньше всего верующих?<br>
<img src='3-2.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[1]" type="radio" value="Неверно">В Польше<br>
<input name="answer[1]" type="radio" value="Неверно">В США<br>
<input name="answer[1]" type="radio" value="Верно">В Китае<br>
3.Кто большую часть жизни проводит в пустыне?<br>
<img src='3-3.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[2]" type="radio" value="Верно">Бедуины<br>
<input name="answer[2]" type="radio" value="Неверно">Бушмены<br>
<input name="answer[2]" type="radio" value="Неверно">Пигмеи<br>
4.Какая страна является королевством??<br>
<img src='3-4.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[3]" type="radio" value="Неверно">Бразилия<br>
<input name="answer[3]" type="radio" value="Неверно">Китай<br>
<input name="answer[3]" type="radio" value="Верно">Бельгия<br>
5.Какой прибор изображен на картинке?<br>
<img src='3-5.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[4]" type="radio" value="Неверно">Фонограф<br>
<input name="answer[4]" type="radio" value="Неверно">Радио<br>
<input name="answer[4]" type="radio" value="Верно">Патефон<br>



<p><input href="#otv" type='submit' name="Submit" value='Отправить'></p>

<!--
<p><a href="#top">К ответам</a></p>
<input type='submit' name="Submit" value='Отправить'>
-->

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
$r3 = $k;
$l=$k*100/5;

$filename = 'r3.txt';
$text = serialize($r3); //сериализация
//записываем текст в файл
file_put_contents($filename, $text);
/*
//потом его можно прочитать из файла
$text = file_get_contents($filename);
//восстановить массив из текстового представления
$arr = unserialize($text);
*/

echo "{$r3} ответов, {$l}% задания", '<br>';
?>



</br>

</div>
</body>
</body>
</html>