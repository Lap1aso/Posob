<html>
<head>
	<title>Мультимедийные возможности и Формы</title>
	 <link rel="stylesheet" type="text/css" href="Style1.css">
   <link rel="stylesheet" type="text/css" href="Text1.css">
   <link rel="SHORTCUT ICON" href="primer/pick.gif">
 <Style>

  body { background-image: url(primer/fon.png) ;
-moz-background-size: 100%;
   -webkit-background-size: 100%;
   -o-background-size: 100%;
    background-size: 100%;
    }
    </Style>

</head>

<body>
  <div class="form">
	<div class="container">
<h4><i>
	<table class="raz">
  <tr>
    <td><a href="">____________________</a>
    <td><a href="HTML1.php">На главную</a>
    <td><a href="">____________________</a>
  </tr>
</table>

	                                         <hr/> <p align="center"><big>1 Мультимедийные возможности HTML</big></p><hr/> 

<p style="text-indent:20px">Браузер Netscape позволяет подключать дополнительные программные модули для мультимедийных приложений. В программу встроена поддержка технологий LiveAudio (для звуковых файлов форматов WAV, AU, AIFF и MIDI), Live3D (VRML), LiveVideo (видео-файлы АVI) и QuickTime (файлы формата MOV, включающие текст и звук MIDI). Все это может быть интегрировано в вашу страницу при помощи тега <.EMBED>. 

<p style="text-indent:20px">Для других браузеров указывается элемент <.NOEMBED>, где между начальным и конечным тегами указывается альтернативный текст. Отметим некоторые параметры тега <.EMBED>. <br> <br>

		 	<table border="1">
<tr>
<th>Атрибут</th>
<th>Назначение</th>
</tr>
<tr>
<td> SRC  </td>
<td> Полный путь или имя файла вставляемого объекта. Параметр обязателен </td>
</tr>
<tr>
<td> PALETTE </td>
<td> Тип палитры для просматриваемого объекта. Имеет значения: 
foreground, background 
</td>
</tr>
<tr>
<td> HIDDEN  </td>
<td> Тип отображения объекта на экране. Значения: false -- объект не отображается (по умолчанию), true -- объект отображается  </td>
</tr>
<tr>
<td> TYPE </td>
<td> Тип файла объекта </td>
</tr>
</table> <br>


<p style="text-indent:20px">Другие атрибуты этого тега аналогичны атрибутам тега <.IMG> (собственно, и вставка объекта в HTML-документ происходит похожим образом), поэтому здесь не будут описаны такие параметры элемента, как NAME, ALT, BORDER, HEIGHT, WIDTH, ALIGN, HSPACE, VSPACE. <br> <br>

Пример<br>

<p style="text-indent:20px">Строка <.EMBED SRC=nature.wav> позволит использовать в качестве фонового звука музыкальный файл nature.wav, а для вложения файла js.pdf в формате PDF (Adobe Portable Document Format) нужно добавить строку <br> <br>


<span class="letter"><.EMBED SRC=js.pdf WIDTH=500 BORDER=0 ALIGN=left></span><hr/>


                                                <hr/> <p align="center"><big>2 Формы в HTML-документах</big></p><hr/>


<p style="text-indent:20px">Формы HTML позволяют получать информацию от читателей. До сих пор мы обсуждали только способы вывода данных, теперь речь пойдет об обратном действии. Формы дают возможность запрашивать информацию в виде свободного текста, получать ответы типа "да/нет" или делать выбор из нескольких опций.

<p style="text-indent:20px">Вы можете использовать формы с различными целями. Простейшим примером является размещение формы, куда читатели, посетившие сайт, смогут записать свои отзывы. Круг применения форм HTML ограничивается только вашей фантазией.  <hr/> 

                                                <p align="center"><big>2.1 Тег <.FORM></big></p><hr/><br>

<p style="text-indent:20px">Этим тегом начинается каждая форма. В нем нужно определить два атрибута, указывающих используемый скрипт и метод посылки данных. 

	<table border="1">
<tr>
<th>Атрибут</th>
<th>Назначение</th>
</tr>
<tr>
<td> ACTION  </td>
<td> Определяет URL, который примет и обработает данные формы. Если этот атрибут не определен, данные отправляются по адресу страницы, на которой помещена форма  </td>
</tr>
<tr>
<td> METHOD </td>
<td> Указывает форме, как послать информацию соответствующей программе обработки (скрипту). Обычно он получает значение post, тогда информация формы посылается отдельно от URL. Значению get соответствует посылка вместе с URL 
</td>
</tr>
</table> <br>

<p style="text-indent:20px">Пример <br>

<span class="letter"><.FORM METHOD="post" ACTION="/cgi-bin/comment_script"><br>	
...<br>	
<./FORM></span> 

<p style="text-indent:20px">В этом примере дано указание браузеру отправить заполненную форму для обработки скриптом comment_script, расположенным в каталоге cgi-bin вашего сервера, и использовать метод посылки post. 

<p style="text-indent:20px">На странице можно расположить любое число форм, однако, нужно следить за тем, чтобы не поместить одну форму в другую.<hr/>

	                                <p align="center"><big>2.2 Работа с тегами форм <.FORM></big></p><hr/>


<p style="text-indent:20px">В HTML существует три тега для создания различного типа полей в форме: <.TEXTAREA>, <.SELECT> и <.INPUT>. Любое их количество может быть размещено в контейнере между тегами <.FORM> и <./FORM>. Ниже дано их краткое описание, а подробнее они будут рассмотрены чуть позже. <br> <br>	


	<table border="1">
<tr>
<th>Тег</th>
<th>Назначение</th>
</tr>
<tr>
<td> <.TEXTAREA>  </td>
<td> Определяет поле, в которое пользователь вводит многострочную текстовую информацию  </td>
</tr>
<tr>
<td> <.SELECT>  </td>
<td> Позволяет пользователю сделать выбор в окне с полосой прокрутки, либо в раскрывающемся меню </td>
</tr>
<tr>
<td> <.INPUT>   </td>
<td> Обеспечивает некоторые другие виды ввода информации: ввод одной строки текста, установку и сброс флажков (check boxes), выбор переключателя (radio buttons) и нажатие кнопки для отправки данных или очистки формы   </td>
</tr>
</table> <br><hr/>	

                                                    <p align="center"><big>2.3 Тег <.TEXTAREA></big></p><hr/>

<p style="text-indent:20px">Этот тег предназначен для построения поля с целью ввода многострочный текстовой информации. В контейнере TEXTAREA допускается размещать любой текст, который будет выведен в поле ввода по умолчанию. Перечислим атрибуты этого тега.<br><br> 

	<table border="1">
<tr>
<th>Атрибут</th>
<th>Назначение</th>
</tr>
<tr>
<td> NAME   </td>
<td> Определяет название поля; обязателен   </td>
</tr>
<tr>
<td> ROWS  </td>
<td> Устанавливает высоту поля, т. е. число строк в нем </td>
</tr>
<tr>
<td> COLS  </td>
<td> Устанавливает ширину поля, т. е. длину строки  </td>
</tr>
</table> <br><br>

<img border="0" src="primer/prim25.png" align="right" alt="Пример" >

Пример <br>

<span class="letter"><.HTML><.BODY> <br>	
<.FORM> <br>	
<.TEXTAREA> Какой-то текст <./TEXTAREA><br>	
<./FORM> <br>	
<./BODY><./HTML></span> <br> <br> <br>	


<p style="text-indent:20px">При помощи атрибутов ROWS и COLS можно задать поле любого размера. Хотя эти атрибуты не являются обязательными, они не имеют определенных значений по умолчанию (для каждого браузера эти значения различны), поэтому лучше их всегда указывать явно.<hr/> 

	                                              <p align="center"><big>2.4 Тег <.SELECT></big></p><hr/>

<p style="text-indent:20px">Этот тег используется для создания всплывающего меню или списка опций с полосой прокрутки. Список опций и пункты меню располагаются внутри контейнера SELECT. Аналогично тегу <.TEXTAREA>, <.SELECT> требует обязательного определения имени в атрибуте NAME. Количество опций указывается в атрибуте SIZE. Ниже перечислены атрибуты тега <.SELECT>.<br> <br>	 

	<table border="1">
<tr>
<th>Атрибут</th>
<th>Назначение</th>
</tr>
<tr>
<td> NAME   </td>
<td> Определяет название информации   </td>
</tr>
<tr>
<td> SIZE   </td>
<td> Определяет вертикальный размер окна для опций выбора. Если атрибут опущен или его значение равно 1, выводится всплывающий список опций. Если указано число больше единицы, то опции выводятся в окне с полосой прокрутки. Если значение атрибута больше, чем фактическое количество элементов списка, добавляются пустые строки. При их выборе пользователем возвращаются пустые поля  </td>
</tr>
<tr>
<td> MULTIPLE </td>
<td> Позволяет выбирать сразу нескольких опций  </td>
</tr>
</table>

<p style="text-indent:20px">Список опций включается в контейнер <.SELECT> при помощи тега <.OPTION>. Этот тег имеет два атрибута. <br><br>

	<table border="1">
<tr>
<th>Атрибут</th>
<th>Назначение</th>
</tr>
<tr>
<td> VALUE  </td>
<td> Указывает значение, возвращаемое программе обработки (скрипту), в случае выбора опции пользователем   </td>
</tr>
<tr>
<td> SELECTED  </td>
<td> Указывает на опцию, выбранную по умолчанию  </td>
</tr>
</table> <br> <br>		

Пример<br>	

<p style="text-indent:20px">Ниже приведено содержимое двух HTML-документов, содержащих похожие формы. Во втором документе предварительно выбран один элемент из списка (добавлен атрибут SELECTED). 


<img border="0" src="primer/prim26.png" align="right" alt="Пример" >

<span class="letter"><.HTML> <br>	
<.BODY><br>	
 Выберите время года: <br>	
<.FORM><br>	
<.SELECT NAME=year><br>	
<.OPTION SELECTED VALUE="winter"> зима <br>	
<.OPTION VALUE="spring"> весна <br>	
<.OPTION VALUE="summer"> лето<br>	
<.OPTION VALUE="autumn"> осень<br>	
<./SELECT><br>	
<./FORM><br>	
<./BODY><br>	
<./HTML></span> <br> <br> <br>

<img border="0" src="primer/prim27.png" align="right" alt="Пример" >

<span class="letter"><.HTML><br>
<.BODY><br>
<.FORM><br>
 Выберите время года: <br>
<.SELECT MULTIPLE NAME="year"><br>
<.OPTION SELECTED VALUE="winter"> зима<br>
<.OPTION VALUE="spring"> весна<br>
<.OPTION VALUE="summer"> лето<br>
<.OPTION VALUE="autumn"> осень<br>
<./SELECT><br>
<./FORM><br>
<./BODY><br>
<./HTML></span> <hr/>


                                                  <p align="center"><big>2.5 Тег <.INPUT></big></p><hr/>

<p style="text-indent:20px">Тег <.INPUT>, в отличие от <.TEXTAREA> и <.SELECT>, является одиночным тегом. Он предназначен для сбора информации различными способами, включая текстовые поля, поля для ввода пароля, переключатели, флажки, кнопки для отправки данных (Submit) и для очистки формы (Reset, Clear). 

<p style="text-indent:20px">Тег <.INPUT> располагает следующими атрибутами. <br> <br>

<table border="1">
<tr>
<th>Атрибут</th>
<th>Назначение</th>
</tr>
<tr>
<td> NAMESIZE  </td>
<td> Указывает размер поля ввода в символах </td>
</tr>
<tr>
<td> MAXLENGTH  </td>
<td> Определяет максимально возможное число символов, вводимых в поле </td>
</tr>
<tr>
<td> VALUE  </td>
<td>Для текстового поля определяет текст, выводимый по умолчанию. Для флажков и переключателей указывает значение, возвращаемое программе обработки. Для кнопок отправки и очистки формы определяет надпись на кнопке </td>
</tr>
<tr>
<td> CHECKED   </td>
<td> Устанавливает флажок или переключатель во включенное состояние по умолчанию. С другими типами тегов <INPUT> не употребляется </td>
</tr>
<tr>
<td> TYPE  </td>
<td> Устанавливает тип поля ввода  </td>
</tr>
</table> <br><hr/> 	

                                     <p align="center"><big>2.6 Тип поля ввода, атрибут TYPE</big></p><hr/>

<p style="text-indent:20px">Атрибут TYPE тега <.INPUT> может принимать следующие значения. <br> <br>  

<table border="1">
<tr>
<th>Атрибут</th>
<th>Назначение</th>
</tr>
<tr>
<td> TEXT  </td>
<td> Является значением по умолчанию и предполагает создание одной строки для ввода данных. Для этого типа поля ввода употребляются атрибуты NAME (обязательный), SIZE, VALUE и MAXLENGTH </td>
</tr>
<tr>
<td> PASSWORD </td>
<td> Позволяет заменять вводимые символы пароля звездочками. Для этого типа поля ввода используются атрибуты NAME (обязательный), SIZE, MAXLENGTH и VALUE </td>
</tr>
<tr>
<td> CHECKBOX </td>
<td> Позволяет вывести поле для установки флажка в виде маленького квадратика, в котором может быть произведена отметка опции "галочкой". Может использоваться совместно с атрибутами NAME (обязательный), VALUE и CHECKED (определяет установленный по умолчанию флажок). Флажки обычно употребляются, когда можно выбрать сразу несколько опций из числа предложенных. 
Нужно быть очень осторожным в использовании флажков и переключателей, если цвет фона страницы определяется не документом, а пользователем при помощи установок программы просмотра. Не допускайте, чтобы опции сливались с фоном страницы </td>
</tr>
<tr>
<td> RADIO </td>
<td> Позволяет выбрать только одну из представленного числа опций. Переключатели можно группировать, задавая одно и то же значение атрибута NAME (обязательный). Так же используются атрибуты VALUE и CHECKED </td>
</tr>
<tr>
<td> RESET  </td>
<td> Позволяет создать кнопку для очистки формы. Атрибут VALUE может быть использован здесь для наименования этой кнопки (по умолчанию кнопка имеет надпись Reset) </td>
</tr>
<tr>
<td> SUBMIT  </td>
<td> Используется для создания кнопки, по нажатию которой введенные данные отправляются на сервер для обработки программой-скриптом. В атрибуте VALUE может быть указано название для этой кнопки (по умолчанию -- Submit Query) </td>
</tr>
</table> <br> <br> 

Пример<br> <br>

В следующей форме используется значение TEXT. <br> 

<img border="0" src="primer/prim28.png" align="right" alt="Пример" >

<span class="letter"><.HTML><br> 
<.BODY><br> 
<.FORM><br> 
Введите номер телефона:<br> 
<.INPUT TYPE="TEXT" NAME="phone" <br> 
 SIZE="15" MAXLENGTH="12"> <br> 
<./FORM> <br> 
<./BODY><br> 
<./HTML></span> <br> <br> 

Пример<br> <br> 

Использование значения PASSWORD.<br> 

<img border="0" src="primer/prim29.png" align="right" alt="Пример" >

<span class="letter"><.HTML><br> 
<.BODY><br> 
<.FORM><br> 
Введите секретное слово: <br> 
<.INPUT TYPE="password" NAME="secret_word"<br>  
SIZE="30" MAXLENGTH="30"> <br>
<./FORM><br>  
<./BODY><br> 
<./HTML></span> <br> <br>

Пример <br> <br>

Использование значения CHECKBOX. <br>

<img border="0" src="primer/prim30.png" align="right" alt="Пример" >

<span class="letter"><.HTML><br>
<.BODY><br>
<.FORM><br>
<.INPUT TYPE="checkbox" NAME="checkbox1"<br>
 VALUE="checkbox_value1"> Вариант<br>
<.BR><br>

<.INPUT TYPE="checkbox" NAME="checkbox2" <br>
 VALUE="checkbox_value2" CHECKED><br>
 Предварительно выбранный вариант <br>
<./FORM><br>
<./BODY><br>
<./HTML> </span><br><br> 


Пример<br><br>

В этом примере две формы расположены в соседних ячейках таблицы. <br><br> 

<img border="0" src="primer/prim31.png" align="right" alt="Пример" >

<span class="letter"><.HTML><br>
<.BODY><br>
<.TABLE ALIGN=center BORDER CELLSPACING=10><br>
<.TR><br>
<.TD><br>
Форма 1:<br>
<.FORM> <br>
<.INPUT TYPE="radio" NAME="choice" <br>
 VALUE="choice1"> yes.<br>
<.INPUT TYPE="radio" NAME="choice"<br> 
 VALUE="choice2"> no. <br>
<./FORM> <br>
<./TD><br>
<.TD><br>
Форма 2:<br>
<.FORM> <br>
<.INPUT TYPE="radio" NAME="choice" <br>
 VALUE="choice1" CHECKED> yes.<br> 
<.INPUT TYPE="radio" NAME="choice" <br>
 VALUE="choice2"> no.<br> 
<./FORM> <br>
<./TD><br>
<./TR><br>
<./TABLE><br>
<./BODY><br>
<./HTML></span> <br> <br> 

Пример<br> <br> 

В следующей форме используется значение RESET. <br><br>

<img border="0" src="primer/prim32.png" align="right" alt="Пример" >

<span class="letter"><.HTML><br>
<.BODY><br>
<.FORM><br>
<.INPUT TYPE="reset"><br>
<.BR><br>
<.INPUT TYPE="reset" VALUE="Очистить форму!"><br>
<./FORM><br>
<./BODY><br>
<./HTML> <br></span> <br><br>


Пример<br><br>

Использование значения SUBMIT. <br>

<img border="0" src="primer/prim33.png" align="right" alt="Пример" >

<span class="letter"><.HTML><br>
<.BODY><br>
<.FORM><br>
<.TEXTAREA> Какой-то текст <./TEXTAREA><br>
<.BR> <br>
<.INPUT TYPE="submit" VALUE="Отослать данные!"> <br>
<./FORM><br>
<./BODY><br>
<./HTML><br><br><br></span> <hr/>

                                <p align="center"><big>2.7 Нестандартное использование элементов форм</big></p><hr/>

<p style="text-indent:20px">Многие теги HTML используются в целях, для которых они изначально не предназначались, например, таблицы -- для разметки страниц. Поэтому смело экспериментируйте и с элементами форм. 

<p style="text-indent:20px">Наиболее гибкими являются меню выбора. Всплывающее меню может выполнять функцию информационной полосы, включенной в текстовый поток. Например, можно использовать меню выбора для размещения небольших рассказов (помещая фрагменты текста в элементы OPTION. Применение этих возможностей заставляет пользователя активнее взаимодействовать с содержимым вашей страницы. <br> <br>

Пример  <br> <br>

<img border="0" src="primer/prim34.png" width="500" height="250" alt="Пример" >

<img border="0" src="primer/prim35.png"  align="right" width="500" height="250" alt="Пример" >

<p style="text-indent:20px">Ниже приведен HTML-документ, в котором раскрывающийся список используется для размещения небольшого рассказа об авторе. 

<span class="letter"><.HTML><br>
<.BODY><br>
Немного о себе:<br>
<.FORM><br>
<.SELECT NAME="about"><br>
<.OPTION SELECTED VALUE="line0"> Автобиография<br>
<.OPTION VALUE="line1"> ------------------------------<br>
<.OPTION VALUE="line2"> Меня зовут Михаил.<br> 
<.OPTION VALUE="line3"> Я студент первого курса МГИУ.<br>
<.OPTION VALUE="line4"> Мои увлечения: футбол, теннис.<br>
<.OPTION VALUE="line5"> Я жду от вас писем по адресу:<br>
<.OPTION VALUE="line6">  petrov@mail.msiu.ru<br>
<./SELECT><br>
<./FORM><br>
<./BODY><br>
<./HTML></span> 

<table class="raz">
  <tr>
  	<td><a href="ht6.php"><img border="0" width="100" height="50" src="primer/поворот2.png" ></a>
    <td><a href="HTML1.php">На главную</a>
    <td><a href="">________________</a>
  </tr>
</table>







