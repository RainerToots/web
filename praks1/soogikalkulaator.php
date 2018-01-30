<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 30.01.2018
 * Time: 11:28
 */

$soogihind = 2.55; //soogihind einele
$soodusprotsent = 15; // 15% protsenti
$toetus = 1.8; // hetkeline toetus

if ($soogihind > 0 and $soodusprotsent > 0 and $toetus > 0); {
    $soodushind = $soogihind * ((100 - $soodusprotsent) / 100);
    $hindop = $soodushind - $toetus;
    echo "Teie söögihinnaks oleks " .$hindop."<br />";
}