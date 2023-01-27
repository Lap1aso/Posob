<html>
<head>
  <title>Основы языка HTML</title>
  <link rel="stylesheet" type="text/css" href="Style1.css">
      <link rel="stylesheet" type="text/css" href="text1.css">
      <link rel="SHORTCUT ICON" href="prim/pick.gif">
<style>
  body { background-image: url(prim/fon.png);
    -moz-background-size: 100%;
   -webkit-background-size: 100%;
   -o-background-size: 100%;
    background-size: 100%;}
</style>
</head>


<body>
  <div class="form">
	<div class="container">
		<h4><i>
			 <table class="raz">
  <tr>
    <td><a href="">____________________</a>
    <td><a href="CSS1.php">На главную</a>
    <td><a href="">____________________</a>
  </tr>
</table>

			                                  <hr/><p align="center"><big>3 МОДЕЛЬ ФОРМАТИРОВАНИЯ ЭЛЕМЕНТОВ</big></p><hr/>

<p style="text-indent:20px">Для форматирования элементов в стилевых таблицах применяется мо-дель, представляющая собой вложенные прямоугольники, в центре которых находится содержимое самого элемента.
Блок содержимого элемента отделен от границы отступом. Внешней оболочкой является поле. Поле является прозрачным, его цвет наследует элемент-родитель (для текста это элемент BODY). Отступ имеет цвет фона са-мого элемента. Цвет границы задается отдельно. По особенностям формати-рования различаются блочные и встроенные элементы.

<img border="0" src="prim/prim2.png" alt="Пример" align="center" width="200" height="200"><br> <br>

<p style="text-indent:20px"><big>Блочные элементы</big>

<p style="text-indent:20px">В модели  к каждому элементу может быть применено свой-ство display задающее отображение элемента со значениями yes или no, а также его вид блочный (block), встроенный (inline) или список (list-item). Элементы со значением свойства display равным block, list-item, а также эле-менты со значением параметра float равным none являются блочными эле-ментами.

<p style="text-indent:20px">Для форматирования блочного элемента по горизонтали используются семь свойств: левое поле (margin-left), левая граница (border-left), левый от-ступ (padding-left), ширина элемента (width), правый отступ (padding-right), правая граница (border-right), правое поле (margin-right). Сумма значений параметров горизонтального выравнивания равна ширине элемента-родителя или ширине окна браузера, если отсутствует вложение.

<p style="text-indent:20px"><big>Встроенные элементы</big>
<p style="text-indent:20px">Если элементы не форматируются по правилам блочных элементов, то они являются встроенными элементами. Эти элементы для отображения ис-пользуют область строки. В случае недостаточной ширины строки для отоб-ражения, элемент будет разбит на два, помещенных в разные строки. Приве-дем один пример встроенного элемента.<br> <br>

<span class="letter"><.P> В абзаце располагается<br>
<.EM STYLE=”color:lime”> встроенный элемент, отображаемый крас-ным цветом и курсивом <br>
<./EM> <./P></span><br> <br>

<table class="raz">
  <tr>
    <td><a href="cs2.php"><img border="0" width="100" height="50" src="prim/поворот2.png" ></a>
    <td><a href="CSS1.php">На главную</a>
    <td><a href="cs4.php"><img border="0" width="100" height="50" src="prim/поворот1.png" ></a>
  </tr>
</table>

