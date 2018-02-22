<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 22.02.2018
 * Time: 13:07
 */

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