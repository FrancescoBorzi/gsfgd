<?php

/**
 * Description of miRE
 *
 * @author fortunso
 */

$testo=file_get_contents("./mir.txt");
$asd=split("	", $testo);
$asd=str_replace("\n2", "<br/>2", $asd);
$asd=str_replace("\n3", "<br/>3", $asd);

for ($i=0; $i<count($asd); $i++)
{
	echo "$asd[$i] <br/>";
}
  
?>
