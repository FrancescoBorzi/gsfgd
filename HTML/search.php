
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
            function Load(page)
            {
                document.getElementById(page)="query_search.php";

            }
            function showSelected()
            {
                var table = document.getElementById('tabs');
                var fields = document.getElementById('fields');
                var indexf = fields.selectedIndex;
                var index = table.selectedIndex;
                
                var txt = document.getElementById('table');
                var txtf = document.getElementById('fields');
                txt.value = table.options[index].text; 
                
               
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
                    
                   
                    $query = "SHOW COLUMNS FROM $table";
                    $risultato = mysql_query($query) or die("Query fallita: " . mysql_error() );
                    
                   
                    //BUONO NON TOCCARE 
                    $page = "search.php";
                    $word ;
                    if(isset($_POST['word']))
                        $word = $_POST['word'];
                    else
                        $word="";
                    //
                    
                    echo "<form name=\"sel\" action=$page method=\"post\">";
                    echo "<input type=\"text\" name=\"word\" value=\"$word\"/>";
                    echo "<input type=\"submit\" name=\"go\" value=\"Search\"/ onclick=\"Load();\"><br />";
                    
                    echo "<select  name=\"tabs\" onchange='submit();'>";
                    for($i=0;$i<5;$i++){//RICORDA L'ELEMENTO SELEZIONATO IN SEARCH.PHP
                        if($table == $arraytab[$i])
                            echo"<option selected ='selected'> ".$arraytab[$i]." </option>";
                        else
                            echo"<option> ".$arraytab[$i]." </option>";
                    }
                    echo"</select>";
                    
                    echo"<select  name=\"fields\">";
                    
                    $textfields="<select  name=\"fields\">";// LA VAR. textfields CONTIENE I CAMPI TROVATI SOTTOFORMA DI STRINGA.
                    $linea = array();
                    while($linea = mysql_fetch_assoc($risultato)){
                          $textfields.="<option>";
                          $textfields.=$linea['Field'];
                          $textfields.="</option>";
                          echo"<option>".$linea['Field']."</option>";
                    }
                    $textfields.="</select>"; 
               
                    echo"</select>";
                    echo"</form>";
                    
                    echo " $table";
                 
                    
                    setcookie("table", $table);
                    setcookie("textfields",$textfields);
                    setcookie("words",$word);
                    if(isset($_POST['fields']))
                        setcookie("fields",$_POST["fields"]);
                    
               
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
