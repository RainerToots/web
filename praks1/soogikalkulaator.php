<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 30.01.2018
 * Time: 11:28
 */
/**
$soogihind = 2.55; //soogihind einele
$soodusprotsent = 15; // 15% protsenti
$toetus = 1.8; // hetkeline toetus

if ($soogihind > 0 and $soodusprotsent > 0 and $toetus > 0); {
    $soodushind = $soogihind * ((100 - $soodusprotsent) / 100);
    $hindop = $soodushind - $toetus;
    echo "Teie söögihinnaks oleks " .$hindop."<br />";
}
 *
 */
// Eelmise tunni tööd
require_once 'funktsioonid.php'; // ligipääs funktsioonid.php failile

// väljastame html-i vorm
loeVormFailist("vorm.html");
var_dump($_POST);
echo '<pre>';
print_r($_POST);
echo '</pre>';

// testimiseks paneme erinevad väärtused paika
// kasutame selleks massiivi kujul (soodusKaart, kasOledOpilane)
//
// kasutajad on tabel (massiiv), kus
// 1. real on õpilase andmed
// 2. real on õpetaja andmed
// 3. real on külalise andmed
$kasutajad = array(
    array(
        'roll' => 'opilane',
        'soodus' => true,
        'opilaskaart' => true
    ),
    array(
        'roll' => 'opetaja',
        'soodus' => true,
        'opilaskaart' => false
    ),
    array(
        'roll' => 'kulaline',
        'soodus' => false,
        'opilaskaart' => false
    )
);

// erinevad söögid
$praed = array(
    array(
        'nimetus' => 'Šnitsel',
        'kirjeldus' => 'šnitsel sealihast, lisand, kaste, salat, leib',
        'hind' => 2.68
    ),
    array(
        'nimetus' => 'Seapraad',
        'kirjeldus' => 'seapraad, lisand, kaste, salat, leib',
        'hind' => 2.65
    )
);
// vaatame $kasutajad masiivi läbi
foreach ($praed as $praad){
    echo '<h1>'.$praad['nimetus'].'</h1>';
    echo '<code>'.$praad['kirjeldus'].'</code><br />';
    echo '<ul>';
    foreach ($kasutajad as $kasutaja){
        if(empty($_POST)) {
            $_POST['roll'] = 'kulaline';
        }
        if($_POST['roll'] == $kasutaja['roll']) { // Hind ainult, mis valid
            $soogiHind = soogiHind($praad['hind'],
                $kasutaja['soodus'],
                $kasutaja['opilaskaart']);
            echo '<dd>Prae hind ' . $kasutaja['roll'] . ' = ' . round($soogiHind, 2) . ' €</dd><br />';
        }
    }
    echo '</ul>';
}