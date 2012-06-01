<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include "Test.php";
include "db_connect.php";


$file = file("pathName");
while(($Line = each($file))!= null){
    $GeneSympols = nextDat(5,$Line);
    $Mim = nexDat(9,$Line);
    $Disorders = nextDat(13,$Line);
    $DisorderValue1 = nextDat(14,$Line);
    $DisorderValue2 = nextDat(15,$Line);
    $Reference = nextDat(17,$line);
    
    
    
    
    
}








?>
