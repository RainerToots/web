<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 30.01.2018
 * Time: 10:24
 */
// Ühendite loomine
/*
 * KOMMIE
 * TEINE KOMMI
 */
echo "Hello World!"."<br />"; // echo demonstratsioon
print ("Hello Worley!<br />"); // print demonstratsioon
// muutuja defineerimine
$eesnimi = "Rainer"; // muutuja eesnimi = "Rainer" string
$perenimi = "Toots"; // muutuja perenimi = "Toots" string
$bussiNumber = 4; // muutuja bussiNumber = 4 integer
$soiduKestvus = 0.8; // muutuja soiduKestvus = 0.8 float
// konstandite defineerimine
define("NUMBER_PI", 3.14); // constant NUMBER_PI väärtus on 3.14
// Kasutades eelnevaid muutujaid ning konstanti ilusa teksti koostamise.
echo 'Olen '.$eesnimi." ".$perenimi.'<br />';
echo 'Sõidan kesklinna '.$soiduKestvus.' tundi.<br />';
echo 'Bussiga number '.$bussiNumber.'<br />';
echo 'Konstant PI = ' .NUMBER_PI.'<br />';
// tingimuslaused
$ilmValjas = "paike paistab";
if ($ilmValjas == "sajab lund") {
    echo "Tuleb minna sauna!<br />";
}   else {
    echo "Pole mõtet sauna minna!<br />";
}
// ? operator . ternary operator
$ilmValjas = "sajab lund";
echo ($ilmValjas == "sajab lund") ? "Tuleb minna sauna!<br />" : "Pole mõtet sauna minna<br />";