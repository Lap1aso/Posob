<html>
<head>
  <title>Тексты и абзацы</title>
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
                                                     <hr/><p align="center"><big>1 Разделение текста на абзацы</big></p><hr/>

<p style="text-indent:20px">Язык HTML предполагает, что автор документа ничего не знает о компьютере своего читателя. Читатель вправе установить любой размер окна и пользоваться любым из имеющихся у него шрифтов. Это означает, что место переноса в строке определяется только программой просмотра и установками конечного пользователя. Символы перевода строки оригинального документа игнорируются, в результате чего текст, отлично смотревшийся в окне вашего редактора, может превратиться в сплошной неудобочитаемый текст в окне программы просмотра. 

 <p style="text-indent:20px">Избежать этой неприятности позволяет разделение на абзацы при помощи тега <Р>. Разместите его в начало каждого абзаца, и программа просмотра отделит абзацы друг от друга пустой строкой. Использование закрывающего тега </Р> необязательно. Несколько стоящих подряд тегов <Р> не дают дополнительного пространства между абзацами. 

 <p style="text-indent:20px">Тег абзаца имеет один атрибут, поддерживаемый большинством браузеров. Это атрибут ALIGN, задающий выравнивание текста в абзаце. Если этот атрибут не задан, то текст выравнивается по левому краю окна браузера. В таблице представлены возможные значения этого атрибута: <br><br>

 	<table border="1">
<tr>
<th>Значение</th>
<th>Функция</th>
</tr>
<tr>
<td> LEFT </td>
<td> Выравнивание текста по левой границе окна браузера</td>
</tr>
<tr>
<td> CENTER </td>
<td> Выравнивание по центру окна браузера </td>
</tr>
<tr>
<td> RIGHT </td>
<td> Выравнивание по правой границе окна браузера </td>
</tr>
<tr>
<td> JUSTIFY </td>
<td> Выравнивание текста по ширине окна браузера  </td>
</tr>
</table> <br><br>

<p style="text-indent:20px"><u>Пример:
Если вы хотите, чтобы текст абзаца был выровнен по центру, нужно написать следующее: <span class="letter"><Р ALIGN=CENTER> Текст </Р></span> </u><hr/>

                                                                       <p align="center"><big>2 Разрыв строки</big></p><hr/>

<p style="text-indent:20px">Иногда требуется "разорвать" текст, перенеся его остаток на новую строку, при этом не выделяя нового абзаца. Для этого используется тег разрыва строки <ВR>. Он заставляет программу просмотра выводить стоящие после него символы с новой строки. В отличие от тега абзаца, тег <ВR> не добавляет пустую строку. У этого тега нет парного закрывающего тега.

 <p style="text-indent:20px">Пример:<br>  <br>  

 <img border="0" src="primer/prim2.png" alt="Пример" align=right width="504" height="228"><br><br>

 <span class="letter"><НTML> <br>  
<НEAD><br>
<ТITLE> Иосиф Бродский <./ТITLE><br>
<./НEAD><br>
<ВODY TEXT=black BGCOLOR=white><br>
Откуда к нам пришла зима, <ВR> <br>
не знаешь ты, никто не знает.<br>
<Р><br>
Умолкло все. Она сама <ВR> <br>
холодных губ не разжимает.<br>
<./ВODY><br>
<./НTML> <br><br></span>

<p style="text-indent:20px">Некоторые браузеры интерпретируют несколько стоящих рядом тегов <.BR> как один тег, поэтому не стоит использовать его для вставки пустых строк.

<p style="text-indent:20px">Бывают случаи, когда возникает надобность в операции противоположного назначения -- запретить перевод строки. Текст, заключенный между тегами <.NOBR> и <./NOBR>, будет гарантированно располагаться в одной строке без переноса на другую. Горизонтальные линии

<p style="text-indent:20px">Другим методом разделения документа на части является проведение горизонтальных линий. Они визуально подчеркивают законченность той или иной области страницы. Тег <.HR> позволяет провести рельефную горизонтальную линию в окне большинства программ просмотра. Этот тег не требует закрывающего тега. До и после линии автоматически вставляется пустая строка. Атрибуты тега <.HR> представлены в таблице. 

<table border="1">
<tr>
<th>Атрибут</th>
<th>Назначение</th>
</tr>
<tr>
<td> ALIGN  </td>
<td> Выравнивает по краю или центру; имеет значения LEFT, CENTER, RIGHT</td>
</tr>
<tr>
<td> WIDTH </td>
<td> Устанавливает длину линии в пикселах или процентах от ширины окна браузера; в последнем случае добавляется символ % </td>
</tr>
<tr>
<td> SIZE </td>
<td> Устанавливает ширину линии в пикселах  </td>
</tr>
<tr>
<td> NOSHADE </td>
<td> Отменяет рельефность линии  </td>
</tr>
<tr>
<td> COLOR </td>
<td> Указывает цвет линии; используется наименование цвета или шестнадцатеричный код </td>
</tr>
</table> <br><br><hr/>

                                                      <p align="center"><big>3 Форматирование гипертекста</big></p><hr/>

<p style="text-indent:20px">Язык HTML поддерживает как логический (logical), так и физический (physical) стили форматирования содержимого документа. Использование логического форматирования указывает на назначение данного фрагмента текста, а при физическом форматировании досконально задается его внешний вид. По возможности стоит использовать логические стили, так как они позволяют браузеру выбрать наиболее подходящий документу вид. Использование логических стилей также поможет читателю разобраться в структуре документа. Физический стиль используется в основном программами, конвертирующими текстовые файлы, содержащие физическое форматирование, в HTML, так как логическое форматирование документа невозможно выполнить автоматически. <hr/>

                                                      <p align="center"><big>4 Логическое форматирование</big></p><hr/>

 <p style="text-indent:20px">Хотя язык HTML включает теги для достижения различных шрифтовых эффектов (полужирный шрифт, курсив, подчеркнутый шрифт), не все браузеры их поддерживают. Однако все браузеры поддерживают тот или иной способ выделения текста. Поэтому использование логического форматирования текста в любом случае приведет к выделению программой просмотра различных частей текста и выявит структуру документа.<br> 

<p style="text-indent:30px">Говоря о логической разметке текста, можно выделить две основные части: <br>

<p style="text-indent:35px">выделение заголовков в документе; <br>
<p style="text-indent:35px">логическое выделение элементов текста. <br>

 <p style="text-indent:20px">Название документа, задаваемое с помощью тега <.TITLE>, не выводится на экран как часть документа. Чтобы отобразить название используется один из тегов заголовка. Заголовки в типичном документе разделяются по уровням. Язык HTML позволяет задать шесть уровней заголовков: H1 (заголовок первого уровня), Н2, Н3, H4, Н5 и H6. Заголовок первого уровня имеет обычно больший размер и насыщенность по сравнению с заголовком второго уровня. 
Если вы посмотрите на эту главу, то "Логическое форматирование" -- заголовок третьего уровня, "Форматирование гипертекста" -- второго, а "Основы языка HTML" -- первого. На практике заголовки четвертого и далее уровней встречаются лишь в очень больших документах. 

 <p style="text-indent:20px">Если вы посмотрите на эту главу, то "Логическое форматирование" -- заголовок третьего уровня, "Форматирование гипертекста" -- второго, а "Основы языка HTML" -- первого. На практике заголовки четвертого и далее уровней встречаются лишь в очень больших документах.<br><br>

 	<img border="0" src="primer/prim3.png" alt="Пример" align=right width="404" height=428"><br><br>

 	Пример <br><br>
<span class="letter"><.HTML><br>
 <.HEAD> <br>
  <.TITLE> Заголовки <./TITLE><br>
 <./HEAD><br>
 <.BODY BGCOLOR=white><br>
  <.H1> Заголовок 1 уровня<./H1> <br>
  <.H2> Заголовок 2 уровня<./H2> <br>
  <.H3> Заголовок 3 уровня<./H3> <br>
  <.H4> Заголовок 4 уровня<./H4> <br>
  <.H5> Заголовок 5 уровня<./H5> <br>
  <.H6> Заголовок 6 уровня<./H6> <br>
  <./BODY><br>
<./HTML> <br></span>

 <p style="text-indent:20px">Помните, что если вы забудете поставить закрывающий тег заголовка, вид страницы будет искажен: любой из тегов заголовка автоматически вставляет пустую строку до и после себя. 

 <p style="text-indent:20px">Теги заголовков поддерживают атрибут ALIGN, действие которого аналогично действию такого же атрибута тега выделения абзаца. 

 <p style="text-indent:20px">Элементы логического выделения фрагментов текста, а также возможное оформление каждого из них приведены в таблице.<br><br> 

<table border="1">
<tr>
<th>Теги</th>
<th>Применение</th>
<th>Результат</th>
</tr>
<tr>
<td> <.CITE> <./CITE>  </td>
<td> <.CITE> Используется для выделения цитат или названий книг и статей <./CITE> </td>
<td> Используется для выделения цитат или названий книг и статей </td>
</tr>
<tr>
<td> <.CODE> <./CODE>  </td>
<td> <.CODE> Применяется для вывода небольшого куска программного кода <./CODE>  </td>
<td> Применяется для вывода небольшого куска программного кода  </td>
</tr>
<tr>
<td> <.EM> <./EM> </td>
<td> <.EM> Используется для выделения важных фрагментов текста <./EM> </td>
<td> Используется для выделения важных фрагментов текста </td>
</tr>
<tr>
<td> <.KBD> <./KBD>  </td>
<td> <.KBD> Выделяет текст, вводимый пользователем с клавиатуры <./KBD>  <./td>
<td> Выделяет текст, вводимый пользователем с клавиатуры </td>
</tr>
<tr>
<td> <.SAMP> <./SAMP>  </td>
<td> <.SAMP> Используется для выделения текста примера <./SAMP>  </td>
<td> Используется для выделения текста примера </td>
</tr>
<tr>
<td> <.STRONG> <./STRONG>  </td>
<td> <.STRONG> Используется для выделения очень важных фрагментов текста <./STRONG>   </td>
<td> Используется для выделения очень важных фрагментов текста </td>
</tr>
<tr>
<td> <.VAR> <./VAR>   </td>
<td> <.VAR> Используется для отметки имен переменных <./VAR>   </td>
<td> Используется для отметки имен переменных </td>
</tr>
<tr>
<td> <.STRIKE> <./STRIKE>   </td>
<td> <.STRIKE> Используется для отметки удаленного текста <./STRIKE>   </td>
<td> <STRIKE>Используется для отметки удаленного текста </STRIKE> </td>
</tr>
</td>
</tr>
</table>
<br><br> 

<p style="text-indent:20px">Вы, наверное, обратили внимание на то, что некоторые элементы логической разметки текста дают одинаковый результат. Зачем же тогда нужно такое их разнообразие? Ответ на этот вопрос содержится в названии этой группы тегов. Они предназначены для расстановки логических ударений, выделения логических частей и подчеркивания сути высказываний. Их использование весьма актуально, поскольку, вероятно, в ближайшем будущем станет возможен, например, поиск цитат в Web-пространстве, а, может быть, следующее поколение браузеров научится читать документы вслух. Программы, умеющие распознавать логические ударения, заменят монотонные речевые процессоры сегодняшнего дня. 

 <p style="text-indent:20px">Для выделения длинных цитат из основного текста в HTML существует тег <.BLOCKQUOTE>. Этот элемент является контейнером и может содержать любые форматирующие теги. 

 <p style="text-indent:20px">Современные браузеры реагируют на элемент <.BLOCKQUOTE> смещением текста цитаты вправо. Некоторые текстовые программы просмотра обозначают цитату символами >, располагающимися в крайнем левом столбце экрана. Так как сегодня большинство браузеров являются графическими программами, элемент <.BLOCKQUOTE> позволяет авторам внести в текст некоторое визуальное разнообразие. <hr/>

                                                <p align="center"><big>5 Физическое форматирование</big></p><hr/>

<p style="text-indent:20px">Одним из отличий HTML-документа от документа, подготовленного на печатной машинке, является возможность форматирования текста. Язык HTML позволяет автору документа выбрать понравившийся ему шрифт, подходящий размер букв, их цвет и начертание. За все эти параметры отображения текста отвечают теги физического форматирования. Они действуют на все символы, стоящие между открывающим и закрывающим тегами. 

<br><br> 

<table border="1">
<tr>
<th>Теги</th>
<th>Применение</th>
<th>Результат</th>
</tr>
<tr>
<td> <.B> <./B>  </td>
<td> <.B>Полужирный<./B> </td>
<td> <B>Полужирный</B> </td>
</tr>
<tr>
<td> <.I> <./I>   </td>
<td> <.I>Курсив<./I> </td>
<td> <I>Курсив</I>  </td>
</tr>
<tr>
<td> <.U> <./U> </td>
<td> <.U>Подчеркнутый<./U>  <./EM> </td>
<td> <U>Подчеркнутый</U>  </td>
</tr>
<tr>
<td> <.TT> <./TT>   </td>
<td> <.TT>Пишущая машинка<./TT> </td>
<td> <TT>Пишущая машинка</TT> </td>
</tr>
<tr>
<td> <.S> <./S>  </td>
<td> <.S>Зачеркнутый<./S>  </td>
<td> <S>Зачеркнутый</S>  </td>
</tr>
<tr>
<td> <.BIG> <./BIG>  </td>
<td> <.BIG>Большой<./BIG>  </td>
<td> <BIG>Большой</BIG> </td>
</tr>
<tr>
<td> <.SMALL> <./SMALL>   </td>
<td> <.SMALL>Маленький<./SMALL>  </td>
<td> <.SMALL>Маленький<./SMALL> </td>
</tr>
<tr>
<td> <.SUP> <./SUP>  </td>
<td> Верхний -- x<.SUP>индекс<./SUP>   </td>
<td> Верхний -- x<SUP>индекс</SUP> </td>
</tr>
<tr>
<td> <.SUB> <./SUB> </td>
<td> Нижний -- x<.SUB>индекс<./SUB>   </td>
<td> Нижний -- x<SUB>индекс</SUB> </td>
</tr>
</td>
</tr>
</table>

<br><br>

<p style="text-indent:20px">Элементы физического форматирования могут быть вложенными друг в друга, хотя конечный результат зависит от браузера. При этом нужно внимательно следить, чтобы один контейнер находился целиком в другом контейнере, например, <br>

                                          <p align="center"><B><U>жирный и подчеркнутый текст</U></B></p>

<p style="text-indent:20px">Кроме вышеперечисленных тегов в документе может использоваться тег <.FONT>, позволяющий непосредственно задать размер и цвет шрифта. Элемент FONT представляет собой контейнер, т. е. требует как открывающего, так и закрывающего тегов, и сам может использоваться внутри любого другого текстового контейнера. 

<p style="text-indent:20px">После стартового тега обязательно указание атрибутов, без которых элемент не оказывает никакого влияния на текст, помещенный в контейнер. 

<p style="text-indent:20px">Атрибут FACE позволяет указать тип шрифта, которым программа просмотра выведет ваш текст (если таковым располагает пользователь). Если нужного шрифта нет, программа проигнорирует запрос и будет использовать шрифт, установленный по умолчанию. 

<p style="text-indent:20px">Этот атрибут позволяет указать как один, так и несколько шрифтов (через запятую). Весь список будет просмотрен слева направо и первый из имеющихся на машине пользователя будет использован для вывода документа. 

<p style="text-indent:20px">Атрибут SIZE служит для указания размера шрифта в условных единицах от 1 до 7. Считается, что размер "нормального" шрифта соответствует числу 3. Размер может быть как абсолютной величиной (SIZE=5), так и относительной (SIZE=+2). Во втором примере текущий размер шрифта увеличивается на 2. 

<p style="text-indent:20px">Атрибут COLOR устанавливает цвет шрифта, который может быть задан как в формате RGB, так и указанием имени. 

<U><p style="text-indent:20px">Пример:  
<span class="letter">Текст <.FONT COLOR=red> красного цвета <./FONT> и 
<.FONT SIZE=7> большого размера <./FONT</span>> </U>

<br><br>

<img border="0" src="primer/prim4.png" alt="Пример" align=center width="604" height=200"><br><br><hr/>


	                           <p align="center"><big> 6 Предварительно отформатированный текст</big></p><hr/>

<p style="text-indent:20px">Любой фрагмент текста, расположенный между тегами <.PRE> и <./PRE>, разбивается на строки и абзацы в точном соответствии с тем, как вы его вводили. Обычно при выводе на экран предформатированного (preformatted) текста используется моноширинный шрифт (так называется шрифт печатной машинки). Этот тег можно использовать, например, для печати стихов, в которых взаимное расположение строк задал сам автор, или для изображения "картинки", состоящей из символов. Другим важным применением тега <.PRE> является вывод на экран текстов компьютерных программ (на языках Java, C++ и др.), в которых традиционно используют отступы, дополнительные пробелы и пустые строки для выделения структуры исходного кода. Текст внутри контейнера <.PRE> подчиняется действиям тегов <Р> и <.BR> и поддерживает теги заголовков. К содержимому контейнера <.PRE> могут применяться любые элементы физического и логического форматирования, но 
	некоторые моноширинные шрифты не содержат наборов символов полужирного и курсивного начертания. 
<p style="text-indent:20px">Пример

<p style="text-indent:20px">Рассмотрим фрагмент HTML-документа, содержащий предварительно отформатированный текст: <br><br>
<.PRE><br>
Здесь можно ставить <.B>сколько<./B>      угодно 
 	     <p style="text-indent:60px"><.EM>пробелов</.EM>,
и переносить строки, <br>
там, где <br>
захочется. <.P>Html <.S>не<./S> сможет <.H1>нам<./H1> помешать. <br>
</.PRE> <br>

<p style="text-indent:20px">В окне браузера количество пробелов и разрывы строк будут сохранены, к ним добавятся разрывы строк, вызванные использованием тегов <Р>, <.BR> и <.H1>. Первый из приведенных ниже рисунков соответствует заданию в качестве моноширинного в настройках браузера шрифта Courier (Adobe), а для второго использовался шрифт Fixed (Sony). <br><br>

<img border="0" src="primer/prim5.png" alt="Пример" align=center width="604" height=200"><br><br>
<img border="0" src="primer/prim6.png" alt="Пример" align=center width="604" height=200"><br><br>

<table class="raz">
 <tr>
    <td><a href="ht2.php"><img border="0" width="100" height="50" src="primer/поворот2.png" ></a>
    <td><a href="HTML1.php">На главную</a>
    <td><a href="ht4.php"><img border="0" width="100" height="50" src="primer/поворот1.png" > </a>
  </tr>

</body>
</html>