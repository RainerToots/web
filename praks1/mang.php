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
session_start();

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

if(isset($_GET['button'])) {
    ++$_SESSION['counter'];
}
if(isset($_GET['reset'])) {
    $_SESSION['counter'] = 0;
}
?>

<form method="GET">
    Sisesta number 1-50:<br>
    <input type="hidden"    name="counter"  value="<?php echo $_SESSION['counter']; ?>" />
    <input type="number"    name="number"   min="1" max="50">
    <input type="submit"    name="button"   value="Vali!" />
</form>
<?php
$number = 10;
$pakutudnumber = $_GET["number"];
if  (empty($pakutudnumber)) {
    echo "";
}   elseif ($pakutudnumber >= $number - 5 and $pakutudnumber < $number) {
    echo "Sinu arvatud arv on natukene väiksem";
}   elseif ($pakutudnumber <= $number + 5 and $pakutudnumber > $number) {
    echo "Sinu arvatud arv on natukene Suurem";
}   elseif ($pakutudnumber< "$number") {
    echo "Sinu arvatud arv on liiga väike";
}   elseif ($pakutudnumber> "$number") {
    echo "Sinu arvatud arv on liiga suur";
}   elseif ($pakutudnumber = $number) {
    echo "Te arvasite õigesti!";
}

echo "<br>Proov:" .$_SESSION['counter'];
?>
<form mehot="GET">
    <br>
    <input type="submit" name="reset" Value="Proovi uut arvu?">
</form>