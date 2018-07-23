<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clock</title>
</head>
<body>
<?php
function count_angle($hour, $minute)
    {   
        if (($hour >= 0 && $hour < 12) && ($minute >= 0 && $minute < 60 )) {
                return $hour * 360 / 12 + $minute * 360 / 12 / 60 - $minute * 360 / 60;
            }
        else {
	        echo "Часы (0..11), минуты (0..59)";
        }
    } 
echo count_angle(3, 15);
?>
</body>
</html>