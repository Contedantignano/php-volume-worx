<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title> </title>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
</head>
<body>



<?php
function getName($name){
    echo $name;
}
?>

<h1>Passaggi di parametri nelle funzioni</h1>
<?php
$name1 = "Geroge Smith";
$name2 = "Sally Thombstone";
/** Passaggi di parametri nelle funzioni */
?>

<p><?php getName($name1); ?></p>
<p><?php getName($name2); ?></p>
<p><?php getName('Fausto Bobbi'); ?></p>
<p><?php getName("Fausto Coppi"); ?></p>
<br>
<hr>
    <h1>Array per passaggio parametri</h1>
<?php
/** utilizzo array nelle funzioni per passare i parametri */
$contacts = array ("George Smith", "Sally Mayers");
foreach ($contacts as $contact) :
?>
<p><?php getName($contact); ?></p>
<?php endforeach; ?>

<hr>

<?php
function getName2($name, $department) {
    echo $name . ' - ' . $department;
}
?>
    <h1>Array e Parametri nella funzione e passaggio dei parametri</h1>
<?php
$contacts = array("Gregory Peck", "Sally Lubrano");
$department = "Office";
foreach ($contacts as $contact):
?>
<p><?php getName2($contact, $department); ?></p>
<?php endforeach; ?>
<hr>
<?php
function getName3(&$name, &$department) {
    echo $name .' - ' . $department;
    $name = "Sally Roger Moore";
    $department = "Sinistri";
}
?>
<h1>Logica del Passaggio di argomenti tramite "&" sulla definizione dei parametri di funzione</h1>
<?php
    $contact = "Brad Rogerson";
    $department = "Tributi";
?>
<p><?php getName3($contact, $department); /**  la funzione stampa con "echo" $name e $department se c'è la "&"
     le sovrascive alle variabili */?></p>
<p><?php echo $contact; ?></p>
<p><?php echo $department; ?></p>

<hr>
<h1>Ottenere valori dalla funzioni con RETURN</h1>
<?php
function addNumbers($number1, $number2) {
    $result = $number1 + $number2;
    return $result; /** in questo modo passa un risultato */
}
?>
<hr>
<?php
$answer = addNumbers('3','3');
    echo $answer;
?>
<hr>
<?php
function addNumbers2($number1, $number2) {
    if (is_numeric($number1) and is_numeric($number2)) {
        $result = $number1 + $number2;
        return $result;
    } else {
        return false;
    }
}
$answer2 = addNumbers2('2', 'All');
if ($answer2) {
    echo $answer2;
} else {
    echo 'Non posso calcolare, uno degli argomenti non è un numero!';
}
?>
</body>
</html>