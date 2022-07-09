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


  


1.Какому дереву посвящено больше всего стихов русских поэтов??<br> 
<img src='2-1.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[0]" type="radio" value="Верно">Берёзе<br>
<input name="answer[0]" type="radio" value="Неверно">Иве<br>
<input name="answer[0]" type="radio" value="Неверно">Дубу<br>
<br>
2.Как называется боязнь воды??<br>
<img src='2-2.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[1]" type="radio" value="Неверно">Водофобия<br>
<input name="answer[1]" type="radio" value="Неверно">Батофобия<br>
<input name="answer[1]" type="radio" value="Верно">Гидрофобия<br>
<br>
3.Что географически разделяет Россию на Европу и Азию?<br>
<img src='2-3.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[2]" type="radio" value="Неверно">Баренцево море<br>
<input name="answer[2]" type="radio" value="Верно">Уральские горы<br>
<input name="answer[2]" type="radio" value="Неверно">Хибины<br>
<br>
4.Какой космонавт первым высадился на Луну?<br>
<img src='2-4.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[3]" type="radio" value="Верно">Нил Армстронг<br>
<input name="answer[3]" type="radio" value="Неверно">Юрий Гагарин<br>
<input name="answer[3]" type="radio" value="Неверно">Джон Шепард<br>
5.В какой стране производится рекордное количество фильмов?<br>
<br>
<img src='2-5.jpg' WIDTH="700" HEIGHT="400" BORDER="0"><br><br>
<input name="answer[4]" type="radio" value="Неверно">В Америке<br>
<input name="answer[4]" type="radio" value="Верно">В Индии<br>
<input name="answer[4]" type="radio" value="Неверно">В России<br>
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
$r2 = $k;
$l=$k*100/5;

$filename = 'r2.txt';
$text = serialize($r2); //сериализация
//записываем текст в файл
file_put_contents($filename, $text);
/*
//потом его можно прочитать из файла
$text = file_get_contents($filename);
//восстановить массив из текстового представления
$arr = unserialize($text);
*/

echo "{$r2} ответов, {$l}% задания", '<br>';
?>



</br>

</div>
</body>
</body>
</html>