<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function nextDat($pos, $str){
    $cont=0;
    for ($index = 0; $index < strlen($str); $index++) {
        if(substr($str, $index)=='|'){
            $cont++;
            if($cont==$pos){
                $index2=$index;
                $index++;
                while(substr($str,$index)!='|'){
                    $index++;  
                }
                return substr($str, $index2,$index-1);
            }
        }
    }
}


?>
