<?php

/**
 * Description of miRE
 *
 * @author fortunso
 */
$testo=file("./hmdd.txt");
$risultato;
$entra=false;

while (($line=each($testo))!=null){
     $line=implode($line);
    if(strcmp(substr($line,0,4),"mir")){
        $entra=true;
    }
    if($entra){
            preg_match_all("((.*?)\\t(.*?)\\n)", $line , $risultato);
            if(implode($risultato[0])!=null){
                $tmp=implode($risultato[0]);
                echo substr($tmp,(strlen($tmp)/2))."<br>";
            }
    }
}

?>