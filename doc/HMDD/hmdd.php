<?php

/**
 * Description of miRE
 *
 * @author fortunso
 */
$testo=file("./hmdd.txt");
$risultato;
$entra=false;
$mirna="";
$disease="";

while (($line=each($testo))!=null){
     $line=implode($line);
    if(strcmp(substr($line,0,4),"mir")){
        $entra=true;
    }
    if($entra){
            
                $tmp=$line;
                $tmp2=substr($tmp,(strlen($tmp)/2)-1);//
                $tmp3=strpos($tmp2,"\t");
                $mirna=substr($tmp2,0,$tmp3);
                $disease=substr($tmp2,$tmp3+1);
                $disease=substr($disease,0,strlen($disease)-3);
                
                if($mirna!="mir")                
                echo "mirna=$mirna  disease=$disease  <br>";
            
    }
}

?>