<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//include "Test.php";
include "omim.php";


$file = file("./pipeGENEMAP.txt");
$Lenght=0;

while(($Line = each($file))!= null){
    $Line=implode($Line);
    $Lenght=strlen($Line);
    
    $GeneSympols = nextDat(5,$Line,$Lenght,$GeneSympols);
    $Mim = nextDat(9,$Line,$Lenght,$Mim);
    $Disorders = nextDat(13,$Line,$Lenght,$Disorders);
    $DisorderValue1 = nextDat(14,$Line,$Lenght,$DisorderValue1);
    $DisorderValue2 = nextDat(15,$Line,$Lenght,$DisorderValue2);
    $Reference = nextDat(17,$Line,$Lenght,$Reference);
    
    //echo  $GeneSympols." ".$Mim;
    echo "<br>";
}








?>
