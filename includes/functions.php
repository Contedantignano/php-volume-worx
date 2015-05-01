<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gabriele
 * Date: 27/04/15
 * Time: 23:35
 * To change this template use File | Settings | File Templates.
 * LoadContent
 * Load the Content
 * @param $default
 */

/** SI usa la funzione LoadContent per caricare CATNAV. div
 * per farlo si aggiungono i parametri $WHERE e $default alla funzione
 */
function loadContent($where, $default='') {
    /** Aggiungendo $where e $default capisco da dove viene la richiesta
     $where riceve come ARGOMENTI: // 'SIDEBAR' in div sidebar //  'CONTENT','HOME' in div Content; questo è il default */
    //$content = '';
    $content = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING);
    /** @var $default è un parametro definito (sarebbe HOME che è un argomento passato dall'index.php */
    $default = filter_var($default, FILTER_SANITIZE_STRING);
    /** Se $content è vuoto setta $default (argomento 'home' in chiamata funzione index.php*/
    $content = (empty($content)) ? $default : $content;
    /** Se $content è vero; modifica il file include a seconda del valore passato a $content (HOME)(GENT)(SPORT)(WOMEN)(ABOUT) ecc */
    /** http://php/index.php?content=categories&sidebar=catnav è l'unico link che passa il valore all funzione loadContent
    * per SIDEBAR; sidebar in questo modo attraverso la funzione diventa include/catnav.php.
     */
    if ($content) {
        $html = include 'content/' . $content .'.php';
        /** Con RETURN la funzione resituisce nella variabile $html la striga (URL) corretta ..il risultato! */
        return $html;


    }
}
?>
