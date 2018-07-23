<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Income</title>
</head>
<body>
<?php
function calc_income($sum, $months, $percent)
{
    return $sum * $months * $percent / 12 / 100;
}
echo calc_income(1000000, 8, 3);
?>
</body>
</html>