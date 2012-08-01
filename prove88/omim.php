<?php

/**
 * Description of omim
 *
 * @author fortunso
 */
function nextDat($pos, $str, $lenght,&$ret){
    $posPipe=0;
    $tmp=0;
    $nPipe=0;
    $posso=false;
           
    for ($index = 0; $index < $lenght; $index++) {
        
        if(strcmp($str[$index],"|")==0){
            $nPipe++;
            $posso=true;
        }
        
        $tmp=$index+1;
        if($nPipe==$pos && $posso==true){
            
            while (strcmp($str[$tmp],"|")!=0){
                $posPipe++;
                $tmp++;
            }
          echo substr($str, $index+1,$posPipe)." ";//.($index+1)."  ".($posPipe+1);
          //$ret=substr($str, $index,$posPipe)."<br>";
          $posso=false;
        }
        $posPipe=0;
    }
    
}

?>
