<?php

$paginazione = "Pagine totali: " . $tot_pages . "
[";
for($i = 1; $i <= $tot_pages; $i++) {
    if($i == $current_page) {
        $paginazione .= $i . " ";
    } else {
         $paginazione .= "<a href=\"?page=$i\" title=\"Vai alla pagina $i\">$i</a> ";
    }
}
$paginazione .= "]";

?> 