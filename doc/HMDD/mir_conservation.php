<?php

/**
 * Description of miRE
 *
 * @author fortunso
 */
$testo=file("./mir_conservation.txt");
$risultato;
$entra=false;
$mirna="";
$conservation="";

while (($line=each($testo))!=null){
     $line=implode($line);
    if(strcmp(substr($line,0,4),"miRNA")){
        $entra=true;
    }
    if($entra){
            preg_match_all("((.*?)\\t(.*?)\\n)", $line , $risultato);
            if(implode($risultato[0])!=null){
                $tmp=implode($risultato[0]);
                $tmp2=substr($tmp,(strlen($tmp)/2));//
                $tmp3=strpos($tmp2,"\t");
                $mirna=substr($tmp2,0,$tmp3);
                $conservation=substr($tmp2,$tmp3);
                                
                echo "mirna=$mirna  consnervation=$conservation  <br>";
            }
    }
}

?>