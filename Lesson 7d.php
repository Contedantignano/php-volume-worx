<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 22/04/15
 * Time: 11:16
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Lesson 7d</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<h1>If Statements</h1>
<?php
$a = 20;
$b = 8;
$c = 58;
$d = 40;
//date = FALSE;
$date = date('D, M d, Y');
if ($d < 50) {
    if ($a >= strlen($date)) :
        echo "<p>Position 1: $a</p>";
    endif;
    echo "<p>Position 2: $d</p>";

    if (($d + $b) < ($c - $a)) :
        echo '<p>Positon 3: ' . ($d + $b) . '</p>';
    endif;
        echo '<p>Positon 4: ' . ($c - $a) . '</p>';

}
?>
<div>
    <?php
    if ($date) { ?>
    <p>Today is <?php echo $date; ?>.</p>
    <p>You can check to see if there's something in a variabile before print it.</p>
    <p>You can also jump in and out of PHP om yhr middle of an if statement.</p>
    <?php } else { echo 'fiori'; }
    ?>
</div>
</body>
</html>