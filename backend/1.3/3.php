<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
</head>
<body>
	<form action="" method="get">
		<input type="text" name="num1" placeholder="Введите число">
		<select name="action">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="num2" placeholder="Введите число">
		<br>
		<button name="perform">Выполнить</button>
	</form>
	<p>Ответ:</p>

<?php
if (isset($_GET["perform"])) {
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];
	$action = $_GET["action"];
	switch ($action) {
		case '+':
			echo $num1 + $num2;
			break;
		case '-':
			echo $num1 - $num2;
			break;
		case '*':
			echo $num1 * $num2;
			break;		
        case '/':
			echo $num1 / $num2;
			break;   
	}
}  
?>
</body>
</html>