<?php

/**
 * Description of miRE
 *
 * @author fortunso
 */
$testo=file("./mir_dsw.txt");
$risultato;
$entra=false;
$i=0;
$mirna="";
$dsw="";

while (($line=each($testo))!=null){
     $line=implode($line);
    if(strcmp(substr($line,0,5),"miRNA")==0){
        if($i>0)
        $entra=true;
        $i++;
    }
    if($entra){
           // preg_match_all("((.*?)\\t(.*?)\\n)", $line , $risultato);
            //if(implode($risultato[0])!=null){
                //$tmp=implode($risultato[0]);
                $tmp=$line;
                $tmp2=substr($tmp,(strlen($tmp)/2)-2);//
                $tmp3=strpos($tmp2,"\t");
                $mirna=substr($tmp2,0,$tmp3);
                $dsw=substr($tmp2,$tmp3);
                $dsw=substr($dsw,1,strlen($dsw)-6);
                 
                if($mirna!="miRNA")
                echo "mirna=$mirna  dsw=$dsw  <br>";
            //}   
    }
}
?>