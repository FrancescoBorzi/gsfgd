<?php

/**
 * Description of miRE
 *
 * @author fortunso
 */
$testo=file("./mir.txt");
$i=0;
$risultato;

while (($line=each($testo))!=null){
    $line=implode($line);
    
    preg_match_all("((.*?)\\t(.*?)\\n)", $line , $risultato);
    
    echo implode($risultato[0])."<br>";
    
    }
  
?>
