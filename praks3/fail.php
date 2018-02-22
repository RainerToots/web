<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 22.02.2018
 * Time: 13:07
 */

require_once 'ab_fkt.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';
extract($_POST);

echo $eesnimi.'<br/>';
echo $perenimi.'<br/>';
echo $aasta.'<br/>';
echo $kuu.'<br/>';
echo $paev.'<br/>';

$aeg = $aasta.'-'.$kuu.'-'.$paev;
echo $aeg.'<br />';

$uhendus = uhendus();

$sql = 'INSERT INTO andmed SET '.
    'eesnimi="'.$eesnimi.'", '.
    'perenimi="'.$perenimi.'", '.
    'aeg="'.$aeg.'"';

$tulemus = saadaAndmed($uhendus, $sql);