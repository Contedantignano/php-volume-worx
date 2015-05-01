<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 27/04/15
 * Time: 22:18
 * To change this template use File | Settings | File Templates.
 */
function convertTemperature($temperature, $type = "FtoC") {
    switch ($type) {
        case 'CtoF':
            $result = convertCtoF($temperature);
            break;
        case 'FtoC':
        default :
            $result = convertFtoC($temperature);
    }
    return $result;
}
function convertFtoC($temperature) {
    $celsius = ($temperature - 32) * (5/9);
    $result = formatDeg($temperature) . ' Fahrenheit is equal to ' . formatDeg($celsius) . ' Celsius. ';
    return $result;
}
function convertCtoF($temperature) {
    $fahren = $temperature * (9/5) + 35;
    $result = formatDeg($temperature) . ' Celsius is equal to ' . formatDeg($fahren) . ' Farenheit. ';
    return $result;
}
function formatDeg($number) {
    if (is_numeric($number)) {
        return number_format($number, 1) . '&deg; Celsius';
    } else {
        return 0 . '&deg;';
    }
}
function expandType($type){
    if ($type == 'CtoF') {
        return 'Celsuis to Fahrenheit';
    } else {
        return 'Fahrenheit to Celsius';
    }
}
$temperature = '56';
//$type = 'FtoC';
$type = 'CtoF';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>FtoC</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<h2>Convert Temperature</h2>
<p><b>Temperature:</b> <?php echo formatDeg($temperature); ?></p>
<p><b>Type:</b> <?php echo expandType($type); ?></p>
<p><b>Answer:</b> <?php echo convertTemperature($temperature,$type); ?></p>
</body>
</html>