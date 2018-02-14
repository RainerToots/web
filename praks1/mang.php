<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 14.02.2018
 * Time: 12:35
 */

// Numberi genereerimine
require_once ("funktsioonid.php");
loeVormFailist("manguvorm.html");
$number=$_POST['num_sis']; // kasutaja sisestab
$lahedal = 5; // lähedal arvule variable
$arvamused = 0; // mitu korda arvanud
$numberarv = rand(1,10); // mida peab kasutaja arvama

// Tulemuse uurimine
if(!empty($_POST['num_sis'])){
    if($number > $numberarv){
        echo "Pakutud arv on suurem. ";
    }
    if($number < $numberarv){
        echo "Pakutud arv on väiksem. ";
    }
    if(abs($number-$numberarv)<=5){
        if($number == $numberarv){
            echo "Arvasid ära!</br>";
            echo "Arv on $numberarv";
            exit;
        }
        echo "Oled juba lähedal! ";
    }
}
echo "$numberarv";