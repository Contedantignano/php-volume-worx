<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 20/04/15
 * Time: 23:57
 * To change this template use File | Settings | File Templates.
 */

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Il tuo compenso</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<?php
print ("<h2>Il Compenso del signor $_REQUEST[Nome] $_REQUEST[Cognome]</h2>\n");
print ("<h3>Giorni lavorativi $_REQUEST[GiorniLavorativi]</h3>\n");
print ("<h3>Costo giornaliero $_REQUEST[CostoGiornaliero] Euro</h3>\n");
print ("<h3>Costo Totale: ");
print ($_REQUEST[GiorniLavorativi] * $_REQUEST[CostoGiornaliero]);
print ("  Euro </h3>\n");
?>

</body>
</html>