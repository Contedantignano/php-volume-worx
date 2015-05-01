<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 20/04/15
 * Time: 23:46
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Calcolo Compenso</title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<form action="1-4.php" method="post">
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="Nome"></td>
        </tr>
        <tr>
            <td>Cognome:</td>
            <td><input type="text" name="Cognome"></td>
        </tr>
        <tr>
            <td>Giorni Lavorativi:</td>
            <td><input type="text" name="GiorniLavorativi"></td>
        </tr>
        <tr>
            <td>Costo Giornaliero:</td>
            <td><input type="text" name="CostoGiornaliero"></td>
        </tr>
        <tr>
            <td colspan="2">
            <input type="submit" value="Calcola"></td>
        </tr>
    </table>
</form>

</body>
</html>