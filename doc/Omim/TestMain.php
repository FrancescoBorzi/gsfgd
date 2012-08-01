<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//include "Test.php";
include "omim.php";


$file = file("./pipeGENEMAP.txt");
$Lenght=0;
$GeneSympols;$Mim;$Disorders;$DisorderValue1;$DisorderValue2;$Reference;

 
while(($Line = each($file))!= null){
    $Line=implode($Line);
    $Lenght=strlen($Line);
    
    nextDat(5,$Line,$Lenght,$GeneSympols);
    nextDat(9,$Line,$Lenght,$Mim);
    nextDat(13,$Line,$Lenght,$Disorders);
    nextDat(14,$Line,$Lenght,$DisorderValue1);
    nextDat(15,$Line,$Lenght,$DisorderValue2);
    nextDat(17,$Line,$Lenght,$Reference);
    
    echo  $GeneSympols." ".$Mim."  ".$Disorders."  ".$DisorderValue1." ".$DisorderValue2." ".$Reference;
    echo "<br>";
}








?>
