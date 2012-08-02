<?php

/**
 * Description of mirna_function
 *
 * @author fortunso
 */

$testo=file("./mirna_function.txt");
$i=0;
$j=0;

while(($Line = each($testo))!= null){
    if(strcmp(substr(implode($Line),0,8),"Function")==0){
        
        $Line=implode($Line);
        while($i<strlen($Line)){
            if($Line[$i]=="\t" || $Line[$i]=="\n"){
                echo substr($Line,$j,$i)."<br>";
            
             $j=$i+1;   
            }
            $i++; 
        }
    }
}

?>
