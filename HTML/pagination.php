<?php
$prima=1;

$paginazione = "Pagine totali:   " . $tot_pages . "  
[";

$paginazione.="<a href=\"?page=$prima&testo=$query\" title=\"Go tu first page\"> << </a> ";

$current=0;
if (isset($_GET["page"])) { $current =$_GET["page"]; } else { $current=1; }; 

if($current>=6 && $current<$tot_pages-6){
    for($i = $current-5; $i <= $current+5; $i++) {
        if($i == $current_page) {
            $paginazione .= $i . " ";
        } else {
             $paginazione .= "<a href=\"?page=$i&testo=$query\" title=\"Go to page $i\">$i</a> ";
        }
    }
}
if($current>=1 && $current<6){
    for($i = 1; $i <= 10; $i++) {
        if($i == $current_page) {
            $paginazione .= $i . " ";
        } else {
             $paginazione .= "<a href=\"?page=$i&testo=$query\" title=\"Go to page $i\">$i</a> ";
        }
    }
}
if($current>=$tot_pages-6){
    for($i = $current-8; $i <= $tot_pages; $i++) {
        if($i == $current_page) {
            $paginazione .= $i . " ";
        } else {
             $paginazione .= "<a href=\"?page=$i&testo=$query\" title=\"Go to page $i\">$i</a> ";
        }
    }
}

$paginazione.="<a href=\"?page=$tot_pages&testo=$query\" title=\"Go to last page\"> >> </a> ";
$paginazione .= "]";

?> 