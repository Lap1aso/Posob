<?php
//Получаем данные из глобальной переменной $_POST, так как мы передаем данные методом POST



$capital1 = $_POST['capital1']; $capital2 = $_POST['capital2']; $capital3 = $_POST['capital3']; $capital4 = $_POST['capital4']; 

$capital5 = $_POST['capital5']; $capital6 = $_POST['capital6']; $capital7 = $_POST['capital7']; $capital8 = $_POST['capital8'];

$capital9 = $_POST['capital9']; $capital10 = $_POST['capital10']; $capital12 = $_POST['capital12']; $capital13 = $_POST['capital13'];

$capital14 = $_POST['capital14']; $capital15 = $_POST['capital15']; $capital16 = $_POST['capital16']; $capital17 = $_POST['capital17'];

$capital18 = $_POST['capital18'];







$result = 0; 

IF ($capital1 == "fopen") {
$result += 5.5;
} ;

IF ($capital2 == "fclose") {
$result += 5.5;
} 

IF ($capital3 == "w") {
$result += 5.5;
} 

IF ($capital4 == "is_file") {
$result += 5.5;
} 

IF ($capital5 == "unlink") {
$result += 5.5;
} 

IF ($capital6 == "rename") {
$result += 5.5;
} 

IF ($capital7 == "copy( )") {
$result += 5.5;
} 

IF ($capital8 == "проверки существования файла") {
$result += 5.5;
} 

IF ($capital9 == "проверки записи файла") {
$result += 5.5;
} 

IF ($capital10 == "rewind") {
$result += 5.5;
} 

IF ($capital11 == "узнать текущую позицию файлового указателя") {
$result += 5.5;
} 

IF ($capital12 == "установить указатель в конец файла") {
$result += 5.5;
} 


IF ($capital13 == "If (a>0) echo") {
$result += 5.5;
} 

IF ($capital14 == "For  ($I = 1; $I <= 10; $I++)  echo $I;") {
$result += 5.5;
} 

IF ($capital15 == "While ($x>0) echo  $х;") {
$result += 5.5;
} 

IF ($capital16 == "For  ($j = 5; $j <= 15; $j++)  echo $j") {
$result += 5.5;
} 

IF ($capital17 == "Строковый") {
$result += 5.5;
} 

IF ($capital18 == "Логический") {
$result += 5.5;
} 

echo "<center>Вы прошли тест на <strong>$result%</strong></center>";


?>
<Br><Br>
<form method="post" align=center action="http://localhost/Heilig/Glava.php">
<input type="submit" align=center name="submitButton" value="На Главную" />
</form>

</table>

		
