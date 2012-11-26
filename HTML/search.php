
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
                  
                
            <script type="text/javascript">
            function load()
            {
             
            }
           
            </script>       
                
                
                
                <?php
                include "db_connect.php";
                
                   
                
                    $arraytab = array();
                    $arraytab[0]="drugbank";
                    $arraytab[1]="hmdd_disease";
                    $arraytab[2]="mirenviroment";
                    $arraytab[3]="omim";
                    $arraytab[4]="hgnc";
                    
                    
                    $table;
                    if(isset($_POST["tabs"]))
                        $table = $_POST["tabs"];
                    else 
                        $table="drugbank";
                    $field="id";
                   
                   
                    
                   
                   
                    //BUONO NON TOCCARE 
                    $word ;
                    if(isset($_POST['word']))
                        $word = $_POST['word'];
                    else
                        $word="";
                    
                    $flag=0;
                    echo "<form name=\"sel\" action=\"search.php\" method=\"post\">";
                    echo "<input id=\"word\" type=\"text\" name=\"word\" value=\"$word\"/>";
                    echo "<input id=\"go\"type=\"submit\" value=\"Search\"  /><br />";
                    
                    echo "<p id=\"q\"></p>";
                    
                    echo "<select  id=\"tabs\" name=\"tabs\" onchange='submit();'>";
                    for($i=0;$i<5;$i++){//RICORDA L'ELEMENTO SELEZIONATO IN SEARCH.PHP
                        if($table == $arraytab[$i])
                            echo"<option selected ='selected'> ".$arraytab[$i]." </option>";
                        else
                            echo"<option> ".$arraytab[$i]." </option>";
                    }
                    echo"</select>";
                    
                    $query = "SHOW COLUMNS FROM $table";
                    $risultato = mysql_query($query) or die("Query fallita: " . mysql_error() );
                    $linea = array();
                    
                    echo"<select id=\"fields\" name=\"fields\">";
                    while($linea = mysql_fetch_assoc($risultato)){
                        if($field == $linea['Field']){
                          echo"<option selected='selected'>".$linea['Field']."</option>";
                        }
                        else{
                          echo"<option >".$linea['Field']."</option>";
                        }
                    }
                    echo"</select>";
                    echo"</form>";
                    
                    if(isset($_POST["fields"]))
                        $field = $_POST["fields"];
                    else 
                        $field= "id";
                    
                   
                    //ESECUZIONE QUERY
                    if($flag == 1){
                       
                        $query_final = mysql_query("SELECT ".$field." FROM ".$table." WHERE ".$field." LIKE '%".$word."%'") or die("Query 2 fallita: " . mysql_error() );
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
                   }
                    
                    
               
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
