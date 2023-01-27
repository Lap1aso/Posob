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

			                            <hr/><p align="center"><big>5 ПРАКТИЧЕСКИЙ ПРИМЕР ИСПОЛЬЗОВАНИЯ КАСКАДНЫХ ТАБ-ЛИЦ СТИЛЕЙ</big></p><hr/>

<p style="text-indent:20px">Создавать блоки элементов для последующего их форматирования по различным правилам можно и без фреймовой структуры или обычных таб-лиц. Этому способствует реализация блочной модели в браузере. Каждый блок задается как отдельный слой, в который можно вкладывать другие слой, размеры и свойства форматирования для которых определяются от-дельно. Отдельные проблемы могут возникнуть при установке точных раз-меров ячеек (блоков) и при использовании для просмотра различных брау-зеров, но решение этих проблем лежит в совершенствовании умения разра-ботчика.

<p style="text-indent:20px">Рассмотрим пример задания 7 блоков в одном документе, используя CSS и один дескриптор <.DIV>:<br> <br>

<span class="letter"><.html><br>
<.head><br>
<.style type=text/css><br> <br>

body {margin: 10px 10px 10px 10px;<br>
  padding: 0;<br>
background: transperent;}<br>
#level1 {border-style: solid;}<br>
#level2 {margin-left: 150px;<br>
padding-left: 10px;<br>
border-style: double;<br>
background: transperent;}<br>
#level3 {border-style: groove;}<br>
#level4 {margin-right: 150px;<br>
  padding-right: 10px;<br>
  border-style: double;<br>
  background: transperent;}<br>
#lewel5 {border-style: ridge;}<br>
# lewel6 {background: blue;}<br>
# lewel7 {background: steelblue;}<br>
<./style><br>
<./head><br>
<.body><br>
<.div id=level1><br>
  <.div id=level2><br>
  <.div id= lewel6><br>
  Верхний блок<br>
  <.div id= lewel6>

  <p style="text-indent:20px">Средний блок<br> <br>

  <span class="letter"><./div><br>
  <./div><br>
  <.div id=level3><br>
  <.div id=level4><br>
  <.div id= lewel5>

  <p style="text-indent:20px">Нижний вложенный блок<br> <br>

 <span class="letter"> <./div><br>
  <./div><br>
  <./div><br>
<./div><br>
<./div><br>
<./body><br>
<./html></span><br> <br>

<img border="0" src="prim/prim3.jpg" alt="Пример" width="700" height="500"><br> <br>

  <table class="raz">
  <tr>
    <td><a href="cs4.php"><img border="0" width="100" height="50" src="prim/поворот2.png" ></a>
    <td><a href="CSS1.php">На главную</a>
    <td><a href="cs4.php">_______________</a>
  </tr>
</table>
