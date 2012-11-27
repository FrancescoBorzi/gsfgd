
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>gsfgd's Project - Home</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="public-15e2edc39baf5ed7d17adffcf905c0a1.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="main">
<div id="maintop"><link href="styles.css" rel="stylesheet" type="text/css" /></div>
<!-- header begins -->
<div id="header">
	
       <div id="logo"><link href="styles.css" rel="stylesheet" type="text/css" /></div>
       <div id="buttons">
		<a href="index.php" title="">Home </a>
		<a href="search.php" title="">Search</a>
		<a href="list.php" title="">List</a>
   		<a href="query.php" title="" style="display:block;font-size:70px;">Query</a>
	</div>
</div>
<!-- header ends -->
<!-- content begins -->
<div id="content">
        <div id="home-descr" align="center">
          <H2 align="center"><b><br />RESULT QUERY<br /><br /></b></H2></div>
	  <div  align="justify">
                <?php
                
                include "db_connect.php";
                
		$query=$_GET["testo"];
		$risultato = mysql_query($query) or die("Query fallita: " . mysql_error() ."asd");
                                
                $res_count = mysql_num_rows($risultato);
                
                // numero totale di records
                $tot_records = $res_count;
                // risultati per pagina(secondo parametro di LIMIT)
                $per_page = 50;

                // numero totale di pagine
                $tot_pages = ceil($tot_records / $per_page);

                // pagina corrente
                if (isset($_GET["page"])) { $current_page =$_GET["page"]; } else { $current_page =1; }; 

                // primo parametro di LIMIT
                $primo = ($current_page - 1) * $per_page;
                                         
                // esecuzione seconda query con LIMIT
                $query_limit = mysql_query($query." LIMIT $primo, $per_page") or die("Query 2 fallita: " . mysql_error() );
                    $linea=array();
                    echo "<div style=\"width: 100%; overflow: auto;\">
                           <table id=\"drugs\" class=\"standard\">
                            <tr>";
                    
                    $num_field=  mysql_num_fields($query_limit);
                    $i=0;
                    //STAMPO CAMPI TABELLE
                    while($i<$num_field){
                        echo "<th>". strtoupper(mysql_field_name($query_limit, $i))."</th>";
                        $i++;
                    }
                    echo "</tr>";
                    
                    $odds_orNOt=1;
                    while ($linea = mysql_fetch_array($query_limit)) { 
                        echo "\t<tr>\n"; 
                        $index=count($linea)/2;
                       if($odds_orNOt%2==0){  
                            echo "<tr class=\"odd\">";
                            for ($i = 0; $i < $index; $i++) {
                                echo "<td>".$linea[$i]."</td>";
                            }echo "</tr>";
                        }
                        else {
                            echo "<tr class=\"even\">";
                            for ($i = 0; $i < $index; $i++) {
                                echo "<td>".$linea[$i]."</td>";
                            }echo "</tr>";
                        }
                       $odds_orNOt++;
                    } 
                    echo"</table>\n"; 
                                    
                // includiamo uno dei files contenenti la paginazione
                include("pagination.php");

                // in questa cella inseriamo la paginazione
                echo " <tr>\n <td height=\"50\" valign=\"bottom\" align=\"center\">$paginazione</td>\n";
                echo " </tr>\n</table>\n</div>";
                
                mysql_close();
	               
                ?>

	</div>
   </div>

<!-- content ends -->
</div>
</body>
</html>


