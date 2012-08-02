<?php

/**
 * Description of mirna_function
 *
 * @author fortunso
 * 
 */

$testo=file_get_contents("./mirna_function.txt");
$asd=explode("\t",$testo);
$asd=str_replace("\n", "<br/>", $asd);
$entra=false;

for ($i=0; $i<count($asd); $i++)
{
    if(strpos($asd[$i],"Function")==0)
        $entra=true;
    if($entra)
	echo "$asd[$i] <br/>";
}

?>
