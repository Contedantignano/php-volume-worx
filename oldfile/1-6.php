<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 21/04/15
 * Time: 00:40
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Estrazioni del lotto </title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>
<table border="1">
    <?php
    for($ruota = 1; $ruota <= 3; $ruota++ )
    {
        print("<tr>");
        print("<td>Ruota $ruota</td>");
        for($n = 1; $n <= 6; $n++)
        {
        print("<td>" . mt_rand(1,90) . "</td>");
    }
    print("<tr>");
    }
    ?>
</table>

</body>
</html>