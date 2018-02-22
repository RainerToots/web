<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 21.02.2018
 * Time: 9:54
 */



    if (!checkdate($month, $day, $year)) {
        $nowArray = getDate();
        $month = $nowArray[mon];
        $year = $nowArray[year];
        $day = $nowArray[day];
    }
    $start = mktime(0,0,0, $month, $day, $year );
    $firstDayArray = getDate($start);
?>
<html>
<head>
    <title><?php print "Calendar: $firstDayArray[day] $firstDayArray[month]
        $firstDayArray[year]" ?></title>
</head>
<body>
<form method="post">
        Eesnimi
        <input type="text" name="eesnimi">
        <br/><br/>Perenimi
        <input type="text" name="perenimi">
        <br/>
    <br/>
    Päev:
    <select name="day">
        <?php
        for ( $x=1; $x<=31; $x++)
        {
            print "\t<option";
            print ($x == $day)?" SELECTED":"";
            print ">$x\n";
        }
        ?>
    </select>
    Kuu:
<select name="month">
    <?php
    $months = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    for ( $x=1; $x <= count( $months ); $x++ )
    {
        print "\t<option value=\"$x\"";
        print ($x == $month)?" SELECTED":"";
        print ">".$months[$x- 1]."\n";
    }
    ?>
</select>
    Aasta:
    <select name="year">
        <?php
        for ( $x=1980; $x<=2018; $x++)
        {
            print "\t<option";
            print ($x == $year)?" SELECTED":"";
            print ">$x\n";
        }
        ?>
    </select>
    <input type="submit" value="Submit" name="submit">
    <?php
    $eesnimi = $_POST["eesnimi"];
    $perenimi = $_POST["perenimi"];
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    if (isset($_POST["submit"]))
    {
        echo '<br/><br/>';
        echo 'Sinu nimi on '.$eesnimi.' '.$perenimi.'<br/>';
        echo 'Kuupäev on '.$day.'/'.$month.'/'.$year;
    }
    ?>
    </table>
</form>
</body>
</html>