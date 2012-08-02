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
    if(strcmp(substr($line,0,5),"miRNA")==0){
        $entra=true;
    }
    if($entra){
           
                $tmp=$line;
                $tmp2=substr($tmp,(strlen($tmp)/2)-2);//
                $tmp3=strpos($tmp2,"\t");
                $mirna=substr($tmp2,0,$tmp3);
                $conservation=substr($tmp2,$tmp3);
                $conservation=substr($conservation,1,strlen($conservation)-5);
                
                if($mirna!="miRNA")
                echo "mirna=$mirna  consnervation=$conservation  <br>";
            
    }
}

?>