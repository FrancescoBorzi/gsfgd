
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
      <div id="bar"></div>
      <!-- content begins -->
      <div id="content">
        <!-- Tabella contenente le due colonne principali -->
        <table width=65% border=0px style="vertical-align:text-top"> 
          <tr> 
            <!-- BEING LEFT-->
            <td id="table-left">
              <!-- BEING "CERCA TRAMITE TAG" -->
             
             
            </td>
            <!-- END LEFT-->
            <!-- BEING RIGHT (Risultato query) -->
            <td id="table-right" align ="center">
                 <?php   
                    $word = $_POST['word'];
                    
                    echo "<form action=\"query_search.php\" method=\"post\">";
                    echo "<input type=\"text\" name=\"word\" value=\"$word\"/>";
                    echo "<input type=\"button\" value=\"Search\"/><br />";
                    echo"<select  name=\"tabs\" >";
                        echo"<option> drugbank </option>";
                        echo"<option> hmdd_disease </option>";
                        echo"<option> mirenviroment </option>";
                        echo"<option> omim </option>";
                        echo"<option> hgnc </option>";
                    echo"</select>";
                    
                    
                    echo $_COOKIE['textfields'];
                    echo "<input type=\"submit\"/>";
                    echo "</form>";
                    
                include "db_connect.php";
                    echo $_COOKIE['fields'];
                    echo $_COOKIE['table'];
                    $query_final = mysql_query("SELECT ". $_COOKIE['fields']." FROM ".$_COOKIE['table']) or die("Query 2 fallita: " . mysql_error() );
                    $linea=array();
                    echo "<table border=\"1\" style=\"border-color:#00ff00;\">\n"; 
                    while ($linea = mysql_fetch_array($query_final)) { 
                        echo "\t<tr>\n"; 
                        $index=count($linea)/2;
                        for ($i = 0; $i < $index; $i++){
                            echo "\t\t<td>$linea[$i]</td>\n";
                        }
                        echo "\t</tr>\n"; 
                    } 
                    echo"</table>\n"; 
                    echo "</td>\n </tr>\n";
                    
                 ?>
             </td>
            <!-- END RIGHT (Risultato query) -->
                

          </tr>
        </table>
         
        <!-- Fine Tabella principale -->

      </div>

      <!-- content ends -->

    </div>
  </body>
</html>
