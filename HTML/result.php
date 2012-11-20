
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>gsfgd's Project - Home</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
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
   		<a href="query.php" title="">Custom Query</a>
	</div>
</div>
<!-- header ends -->
<!-- content begins -->
<div id="content">
        <div id="home-descr" align="center">
          <H2 align="center"><b><br />RESULT QUERY<br /><br /></b></H2>
	  <div  align="justify">
                <?php
                
                $conn=  mysql_connect("localhost","root","");
                
                if(!$conn){
                    die('Not Connected'.mysql_errno());
                    
                }
                
                mysql_select_db("my_db",$conn) or die ("Select error" . mysql_error() );
                
                //$query= $_POST["testo"];
                $query="SELECT * FROM drugbank";
                $risultato = mysql_query($query) or die("Query fallita: " . mysql_error() );
                
                /*$res_count = mysql_fetch_row($risultato);

                // numero totale di records
                $tot_records = $res_count[0];

                // risultati per pagina(secondo parametro di LIMIT)
                $per_page = 10;

                // numero totale di pagine
                $tot_pages = ceil($tot_records / $per_page);

                // pagina corrente
                //$current_page =$_GET['page'];
                //if (!$current_page) $current_page = 1;
                $current_page= isset($_GET['page']) && $_GET['page'] > 1 ? (int) $_GET['page'] : 1;

                // primo parametro di LIMIT
                $primo = ($current_page-1) * $per_page;

                echo "<div align=\"center\">\n<table>\n";

                // esecuzione seconda query con LIMIT
                $query_limit = mysql_query($query." LIMIT $primo, $per_page");
                while($results = mysql_fetch_array($query_limit)) {
                    echo " <tr>\n <td>";
                     $linea=array();
                    echo "<table><tr>"; 
                    while ($linea = mysql_fetch_array($query_limit)) { 
                         
                            $index=count($linea)/2;
                            for ($i = 0; $i < $index; $i++){
                            echo "<td>$linea[$i]</td>";
                            }echo "<tr><tr>";
                             
                    } 
                    echo"</table></tr>"; 
                    echo "</td>\n </tr>\n";
                }

                // includiamo uno dei files contenenti la paginazione, commentate l’altro ovviamente
                include("pagination.php");
                //include(“paginazione_2.php”);

                // in questa cella inseriamo la paginazione
                echo " <tr>\n <td height=\"50\" valign=\"bottom\" align=\"center\">$paginazione</td>\n";

                echo " </tr>\n</table>\n</div>";
                
                */
                /*
                $x_pag=20;
                $pag = isset($_GET['page']) && $_GET['page'] > 1 ? (int) $_GET['page'] : 1;
                $all_rows = mysql_num_rows(mysql_query($query));

                // Tramite una semplice operazione matematica definisco
                // il numero totale di pagine
                $all_pages = ceil($all_rows / $x_pag);

                // Calcolo da quale record iniziare
                $first = ($pag - 1)*($x_pag);

                // Recupero i record per la pagina corrente...
                // utilizzando LIMIT per partire da $first e contare fino a $x_pag
                $rs = mysql_query($query." LIMIT $first, $x_pag")or die("Query 2 fallita: " . mysql_error() );
                $nr = mysql_num_rows($rs);
                for($x = 0; $x < $nr; $x++){
                    $linea=array();
                    echo "<table>\n"; 
                    while ($linea = mysql_fetch_array($rs)) { 
                            echo "\t<tr>\n"; 
                            $index=count($linea)/2;
                            for ($i = 0; $i < $index; $i++){
                            echo "\t\t<td>$linea[$i]</td>\n";
                            }
                            echo "\t</tr>\n"; 
                    } 
                    echo"</table>\n"; 
                    echo "</td>\n </tr>\n";
                  }              

                // Se le pagine totali sono più di 1...
                // stampo i link per andare avanti e indietro tra le diverse pagine!
                $all_pages=5;
                $pag=$current_page;
                if ($all_pages > 1){
                  if ($pag > 1){
                    echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . ($pag - 1) . "\">";
                    echo "Pagina Indietro</a>&nbsp;";
                  } 
                  if ($all_pages > $pag){
                    echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . ($pag + 1) . "\">";
                    echo "Pagina Avanti</a>";
                  } 
                }
            */
                // Chiudo la connessione ad DB

                $res_count = mysql_num_rows($risultato);
                
                // numero totale di records
                $tot_records = $res_count;
                echo "row : ".$res_count."<br>";
                // risultati per pagina(secondo parametro di LIMIT)
                $per_page = 10;

                // numero totale di pagine
                $tot_pages = ceil($tot_records / $per_page);

                // pagina corrente
                if (isset($_GET["page"])) { $current_page =$_GET["page"]; } else { $current_page =1; }; 

                // primo parametro di LIMIT
                $primo = ($current_page - 1) * $per_page;
                //$primo=$primo-1;
                
                echo "current page: ".$current_page."<br>";
                 echo "primo page: ".$primo."<br>";
                 
                echo "<div align=\"center\">\n<table>\n";

                // esecuzione seconda query con LIMIT
                $query_limit = mysql_query($query." LIMIT $primo, $per_page") or die("Query 2 fallita: " . mysql_error() );
                while($results = mysql_fetch_array($query_limit)) {
                echo " <tr>\n <td>";
                 $linea=array();
                    echo "<table>\n"; 
                    while ($linea = mysql_fetch_array($query_limit)) { 
                            echo "\t<tr>\n"; 
                            $index=count($linea)/2;
                            for ($i = 0; $i < $index; $i++){
                            echo "\t\t<td>$linea[$i]</td>\n";
                            }
                            echo "\t</tr>\n"; 
                    } 
                    echo"</table>\n"; 
                    echo "</td>\n </tr>\n";
                echo "</td>\n </tr>\n";
                }

                // includiamo uno dei files contenenti la paginazione, commentate l’altro ovviamente
                include("pagination.php");
                //include(“paginazione_2.php”);

                // in questa cella inseriamo la paginazione
                echo " <tr>\n <td height=\"50\" valign=\"bottom\" align=\"center\">$paginazione</td>\n";

                echo " </tr>\n</table>\n</div>";
                
                mysql_close();
	               
                ?>

	</div>
   </div>
</div>

<!-- content ends -->
</div>

</body>
</html>


