

<?php
$prima=1;

if($tot_pages>0){
 $paginazione=   "<div class=\"pagination-holder\">
                <div class=\"page_info\">
                Displaying drugs. Total page: ".$tot_pages."
                 </div>
                  <nav class=\"pagination\">";
 
//$paginazione = "Pagine totali:   " . $tot_pages . "  
//[";

$paginazione.="<a href=\"?page=$prima&testo=$query\" title=\"Go tu first page\"> << </a> ";

$current=0;
if (isset($_GET["page"])) { $current =$_GET["page"]; } else { $current=1; }; 

if ($tot_pages<=10) {
    for($i = 1; $i <= $tot_pages; $i++) {
        if($i == $current_page) {
            $paginazione .= "<span class=\"page current\">".$i . "</span>";
        } else {
             $paginazione .= "<span class=\"page\"><a href=\"?page=$i&testo=$query\" title=\"Go to page $i\">$i</a> </span>";
        }
    }

}
else {
	if($current>=6 && $current<$tot_pages-6){
	    for($i = $current-5; $i <= $current+5; $i++) {
		if($i == $current_page) {
		    $paginazione .= "<span class=\"page current\">".$i . "</span>";
		} else {
		     $paginazione .= "<span class=\"page\"><a href=\"?page=$i&testo=$query\" title=\"Go to page $i\">$i</a> </span>";
		}
	    }
	}
	if($current>=1 && $current<6){
	    for($i = 1; $i <= 10; $i++) {
		if($i == $current_page) {
		    $paginazione .= "<span class=\"page current\">".$i . "</span>";
		} else {
		     $paginazione .= "<span class=\"page\"><a href=\"?page=$i&testo=$query\" title=\"Go to page $i\">$i</a> </span>";
		}
	    }
	}
	if($current>=$tot_pages-6){
	    for($i = $current-8; $i <= $tot_pages; $i++) {
		if($i == $current_page) {
		    $paginazione .= "<span class=\"page current\">".$i . "</span>";
		} else {
		     $paginazione .= "<span class=\"page\"><a href=\"?page=$i&testo=$query\" title=\"Go to page $i\">$i</a> </span>";
		}
	    }
	}
}
$paginazione.="<a href=\"?page=$tot_pages&testo=$query\" title=\"Go to last page\"> >> </a>  </nav></div>";
}
else $paginazione="";
?> 
