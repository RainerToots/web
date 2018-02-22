<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 14.02.2018
 * Time: 12:35
 */

// Numberi genereerimine
/* require_once ("funktsioonid.php");
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
echo "$numberarv"; */ // Proovime teist lahendust
?>
<?php
session_start();

if(!isset($_SESSION['serveriArv']) and !isset($_SESSION['katseteArv'])){
    $_SESSION['serveriArv'] = mt_rand(1,50);
    $_SESSION['katseteArv'] = 0;
} else {
    $serveriArv = $_SESSION['serveriArv'];
    $katseteArv = ++$_SESSION['katseteArv'];
}

if(isset($_POST['reset'])) {
    $_SESSION['katseteArv'] = 0;
    $_SESSION['serveriArv'] = mt_rand(1, 50);
}

echo '
    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Arva number 1-50:<br>
        <input type="number"    name="kasutajaArv"  min="1" max="50"><br />
        <input type="submit"    value="Otsi" />
    </form>
';

if(!empty($_POST['kasutajaArv'])) {
    $kasutajaArv = $_POST['kasutajaArv'];
        if($kasutajaArv > $serveriArv) {
            echo "Teie arvatud arv on suurem kui vastus.<br />";
        }
        if($kasutajaArv < $serveriArv) {
            echo "Teie arvatud arv on väiksem kui vastus.<br />";
        }
        if (abs($kasutajaArv-$serveriArv)<=5){
            if($kasutajaArv == $serveriArv){
                echo 'Arvasid ära!<br />';
                echo 'Arv oli '.$serveriArv.'<br />';
            }
            echo 'Oled juba lähedal!<br />';
        }
        echo 'Olete arvanud '.$katseteArv.' korda!<br />';
} else {
    echo 'Arv peab olema sisestatud';
}

echo '
    <form method="post">
        <br>
        <input type="submit" name="reset" value="Restart">
    </form>
';

?>