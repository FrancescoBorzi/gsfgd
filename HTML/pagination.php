<?php

$paginazione = "Pagine totali: " . $tot_pages . "
[";

$current=0;
if (isset($_GET["page"])) { $current =$_GET["page"]; } else { $current=1; }; 

if($current>=6){
    for($i = $current-5; $i <= $current+5; $i++) {
        if($i == $current_page) {
            $paginazione .= $i . " ";
        } else {
             $paginazione .= "<a href=\"?page=$i\" title=\"Vai alla pagina $i\">$i</a> ";
        }
    }
    $paginazione .= "]";
}
if($current>=1 && $current<6){
    for($i = 1; $i <= 10; $i++) {
        if($i == $current_page) {
            $paginazione .= $i . " ";
        } else {
             $paginazione .= "<a href=\"?page=$i\" title=\"Vai alla pagina $i\">$i</a> ";
        }
    }
    $paginazione .= "]";
}
if($current>=$tot_pages-5){
    for($i = $current-5; $i <= $current+5; $i++) {
        if($i == $current_page) {
            $paginazione .= $i . " ";
        } else {
             $paginazione .= "<a href=\"?page=$i\" title=\"Vai alla pagina $i\">$i</a> ";
        }
    }
    $paginazione .= "]";
}



?> 