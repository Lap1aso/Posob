<html>
<head>
  <title></title>
   
   <link rel="stylesheet" type="text/css" href="Style1.css">
   <link rel="stylesheet" type="text/css" href="Text.css">
   <link rel="SHORTCUT ICON" href="prim/pick.gif" >

 <style>
body {
   background: url(prim/fon.png);
   -moz-background-size: 100%;
   -webkit-background-size: 100%;
   -o-background-size: 100%;
    background-size: 100%;
</style> 
</head>


<body>
  <div class="form">
	<div class="container">
		<h4><i>
      <table class="raz">
  <tr>
    <td><a href="">____________</a>
    <td><a href="Java11.php">На главную</a>
    <td><a href="">____________</a>
  </tr>
</table>
	                                                <hr/><p align="center"><big>1 Подключение сценариев к html-документу </big></p><hr/>

<p style="text-indent:20px">Сценарии JavaScript бывают встроенные, т.е. их содержимое является частью документа, и внешние, хранящиеся в отдельном файле с расширением <big>.js</big>. Сценарии можно внедрить в html-документ следующими способами:

<p style="text-indent:20px"><big>В виде гиперссылки.</big>

<p style="text-indent:20px">Для этого нужно разместить код в отдельном файле и включить ссылку на файл в заголовок<br> <br>

<span class="letter"> <.head><br>
<.script src="script.js"><./script><br>
<./head></span><br>

<br>
или тело страницы.
<br> <br>

<span class="letter"><.body><br>
<.script src="script.js"><./script><br>
<./body></span><br>

<p style="text-indent:20px">Этот способ обычно применяется для сценариев большого размера или сценариев, многократно используемых на разных веб-страницах.

<p style="text-indent:20px"><big>В виде обработчика события.</big>
<p style="text-indent:20px">Каждый html-элемент имеет JavaScript-события, которые срабатывают в определенный момент. Нужно добавить необходимое событие в html-элемент как атрибут, а в качестве значения этого атрибута указать требуемую функцию. Функция, вызываемая в ответ на срабатывание события, является обработчиком события. В результате срабатывания события исполнится связанный с ним код. Этот способ применяется в основном для коротких сценариев, например, можно установить смену цвета фона при нажатии на кнопку:
  <br> <br>

 <span class="letter"> <.script><br>
var colorArray = ["#5A9C6E", "#A8BF5A", "#FAC46E", "#FAD5BB", "#F2FEFF"]; // создаем массив с цветами фона<br>
var i = 0; <br>

function changeColor(){<br>
    document.body.style.background = colorArray[i]; <br>
    i++;<br>
    if( i > colorArray.length - 1){<br>
        i = 0;<br>
    }<br>
}<br>
<./script><br>
<.button onclick="changeColor();">Change background<./button></span><br><br>

  <script>
var colorArray = ["#5A9C6E", "#A8BF5A", "#FAC46E", "#FAD5BB", "#F2FEFF"];
var i = 0; 

function changeColor(){
    document.body.style.background = colorArray[i]; 
    i++;
    if( i > colorArray.length - 1){
        i = 0;
    }
}
</script>
<button onclick="changeColor();">Нажми чтоб проверить</button>

<p style="text-indent:20px">Внутрь элемента <.script>.
<p style="text-indent:20px">Элемент <.script> может вставляться в любое место документа. Внутри тега располагается код, который выполняется сразу после прочтения браузером, или содержит описание функции, которая выполняется в момент ее вызова. Описание функции можно располагать в любом месте, главное, чтобы к моменту ее вызова код функции уже был загружен.

<p style="text-indent:20px">Обычно код JavaScript размещается в заголовке документа (элемент <.head>) или после открывающего тега <.body>. Если скрипт используется после загрузки страницы, например, код счетчика, то его лучше разместить в конце документа:<br><br>

 <span class="letter">
<.footer><br>
<.script><br>
document.write("Введите свое имя");<br>
<./script><br>
<./footer><br>
<./body></span><br>


<table class="raz">
  <tr>
    <td><a href="Java11.php">На главную</a>
    <td><a href="">____________________</a>
    <td><a href="ja2.php"><img border="0" width="100" height="50" src="prim/поворот1.png" >  </a>
  </tr>
</table>

