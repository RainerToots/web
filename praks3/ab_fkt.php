<?php
/**
 * Created by PhpStorm.
 * User: rainer.toots
 * Date: 22.02.2018
 * Time: 13:26
 */
require_once 'parool.php';

function uhendus(){
    $uhend = mysqli_connect(AB_HOST, AB_USER, AB_PASS, AB_NIMI);
    if($uhend == false){
        echo 'Probleem ühenduse loomisega.<br/>';
        echo mysqli_connect_error();
        echo mysqli_connect_errno();
        exit;
    } else {
        echo 'Ühendus loodud.<br/>';
    }
    return $uhend;
}

function saadaAndmed($uhend, $sql){
    $tulemus = mysqli_query($uhend, $sql);
    if($tulemus == false){
        echo 'Probleem päringuga<br/>';
        echo mysqli_error($uhend);
        echo mysqli_errno($uhend);
        return false;
    } else {
        return $tulemus;
    }
}