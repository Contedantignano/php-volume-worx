<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 21/04/15
 * Time: 00:33
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Esito del prelievo</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<?php
$Saldo = 123;
if($Saldo <= 0)
{
    print("<h3> Spiacente! </h3>");
    print("<h3> Il tuo saldo è di Euro $Saldo</h3>");
    print("<h3> non hai disponibilità</h3>");
} else {
    print("<h3> C'hai una paccata di soldi! </h3>");
    print("<h3> Autorizzazione concessa</h3>");
}
?>
</body>
</html>