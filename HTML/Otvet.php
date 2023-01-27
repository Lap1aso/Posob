<?php
//Получаем данные из глобальной переменной $_POST, так как мы передаем данные методом POST



$capital1 = $_POST['capital1']; $capital2 = $_POST['capital2']; $capital3 = $_POST['capital3']; $capital4 = $_POST['capital4']; 

$capital5 = $_POST['capital5']; $capital6 = $_POST['capital6']; $capital7 = $_POST['capital7']; $capital8 = $_POST['capital8'];

$capital9 = $_POST['capital9']; $capital10 = $_POST['capital10']; $capital12 = $_POST['capital12']; $capital13 = $_POST['capital13'];

$capital14 = $_POST['capital14']; $capital15 = $_POST['capital15']; $capital16 = $_POST['capital16'];



$hgender1 = $_POST['gender1']; 
$hgender2 = $_POST['gender2'];
$hgender3 = $_POST['gender3'];
 $hgender4 = $_POST['gender4'];
 $hgender5 = $_POST['gender5'];

$hgender6 = $_POST['gender6'];
 $hgender7 = $_POST['gender7']; $hgender8 = $_POST['gender8']; $hgender9 = $_POST['gender9']; $hgender10 = $_POST['gender10'];

$hgender11 = $_POST['gender11']; $hgender12 = $_POST['gender12']; $hgender13 = $_POST['gender13']; $hgender14 = $_POST['gender14']; $hgender15 = $_POST['gender15'];

$hgender16 = $_POST['gender16']; $hgender17 = $_POST['gender17'];




$result = 0; 

IF ($capital1 == "A") {
$result += 5;
} ;

IF ($capital2 == "H1 {color: red;}") {
$result += 2.5;
} 

IF ($capital3 == "A: hover {color: red;}") {
$result += 5;
} 

IF ($capital4 == "BODY {color: black}") {
$result += 5;
} 

IF ($capital5 == "красный, зеленый, синий") {
$result += 2.5;
} 

IF ($capital6 == "no-repeat") {
$result += 5;
} 

IF ($capital7 == "<А href= #point>") {
$result += 5;
} 

IF ($capital8 == "когда пользователь удерживает над ссылкой указатель мыши") {
$result += 5;
} 

IF ($capital9 == "List-style-type") {
$result += 5;
} 

IF ($capital10 == "H1") {
$result += 5;
} 

IF ($capital12 == "Да") {
$result += 5;
} 

IF ($capital13 == "BODY { background-image: url") {
$result += 5;
} 

IF ($capital14 == "none") {
$result += 5;
} 

IF ($capital15 == "src") {
$result += 5;
} 
IF ($capital16 == "только валидная страница успешно проходит проверку программой MarkUp Validator") {
$result += 5;
} 

/* если выбрано правильно то увеличиваем счётчик  если выбрано не правильно уменьшаем счётчик */
$subresult = 0; 
IF ($hgender2 != '') {
$subresult++;
}
IF ($hgender3 != '') {
$subresult++;
}
IF ($hgender1 != '') {
$subresult--;
}
IF ($subresult == 2) {
$result += 5;
}
$subresult = 0; 
IF ($hgender4 != '') {
$subresult++;
}
IF ($hgender6 != '') {
$subresult++;
}
IF ($hgender5 != '') {
$subresult--;
}
IF ($hgender7 != '') {
$subresult--;
}
IF ($hgender8 != '') {
$subresult--;
}
IF ($subresult == 2) {
$result += 10;
}
$subresult = 0; 
IF ($hgender9 != '') {
$subresult++;
}
IF ($hgender10 != '') {
$subresult++;
}
IF ($hgender11 != '') {
$subresult--;
}
IF ($hgender12 != '') {
$subresult--;
}
IF ($subresult == 2) {
$result += 10;
}
$subresult = 0; 
IF ($hgender15 != '') {
$subresult++;
}
IF ($hgender16 != '') {
$subresult++;
}
IF ($hgender14 != '') {
$subresult--;
}
IF ($hgender17 != '') {
$subresult--;
}
IF ($subresult == 2) {
$result += 10;
}
echo "<center>Вы прошли тест на <strong>$result%</strong></center>";


?>
<Br><Br>
<form method="post" align=center action="http://localhost/Heilig/Glava.php">
<input type="submit" align=center name="submitButton" value="На Главную" />
</form>

</table>

		
