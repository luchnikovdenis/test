<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date</title>
</head>
<body>
<?php
function show_date($day, $month)
{
    if (($day < 1 || $day > 31) || ($month < 1 || $month > 12)) {
    	echo "В году 12 месяцев, а в месяце 31 день";
    } else {
    	switch ($month) {
            case 1:
                return $day . ' января';
                break;
            case 2:
                return $day . ' февраля';
                break;
            case 3:
                return $day . ' марта';
                break;
            case 4:
                return $day . ' апреля';
                break;
            case 5:
                return $day . ' мая';
                break;
            case 6:
                return $day . ' июня';
                break;
            case 7:
                return $day . ' июля';
                break;
            case 8:
                return $day . ' августа';
                break;
            case 9:
                return $day . ' сентября';
                break;
            case 10:
                return $day . ' октября';
                break;
            case 11:
                return $day . ' ноября';
                break;
            case 12:
                return $day . ' декабря';
                break;
    	}
    }       
} 
echo show_date(12, 6);             

?>
</body>
</html>