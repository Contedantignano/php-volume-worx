<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 20/04/15
 * Time: 23:25
 * To change this template use File | Settings | File Templates.
 */
$FatturaNum = 548;
$Nome =  "Paolino";
$Cognome =  "Papareino";
$GiorniLavorativi = 234;
$CostoGiornaliero = 145;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title> </title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<?php
print("<h2>Fattura del signor $Nome $Cognome </h2>\n");
print("<h3>Giorni lavorativi: $GiorniLavorativi </h3>\n");
print("<h3>Costo giornaliero: $CostoGiornaliero </h3>\n");
print("<h3>Costo Totale: ");
print($CostoGiornaliero * $GiorniLavorativi);
print("  Euro</h3>\n");
?>
</body>
</html>