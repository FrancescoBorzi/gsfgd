
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
		<a href="list.php" title="" style="display:block;font-size:70px;">List</a>
   		<a href="query.php" title="">Query</a>
	</div>
</div>
<!-- header ends -->
<!-- content begins -->
      <div id="content">
          <div align ="center">  
         <?php
	if (isset($_GET["lettera"])) { $lettera =$_GET["lettera"]; } else {  $lettera=$_GET['lettera']="A"; }
	if (isset($_GET["table"])) { $table =$_GET["table"]; } else {  $table="drugbank"; }


	if($table == "drugbank") { $name="name"; }
	else if($table == "hmdd_disease") { $name="disease"; }
	else if($table == "mirenviroment") { $name="phenotype"; }
	else if($table == "omim") { $name="genesymbols"; }
	
	$sql="SELECT * FROM $table WHERE $name LIKE '$lettera%' ORDER BY $name";
	echo '<div id="letters">';
		for($index = 65; $index<91;$index++)
		{
			echo "<a href=\"lista.php?table=$table&lettera=&#$index&testo=$sql\"><input type=\"button\" value=&#$index style=\"10%:10%\"/></a>";
		}
	echo "</div>";
       ?>
              </div>
        <!-- Tabella contenente le due colonne principali -->
        <table width="65%" border="0px" style="vertical-align:text-top"> 
          <tr> 
            <!-- BEING LEFT-->
            <td id="table-left">
              <!-- BEING "ELENCA" -->

              <table width="100%" height="100%"> 
                <tr>
                  <td>
                   
                  </td>
                </tr>
                <tr>
                  <td>
                    <form action="lista.php" method="get" enctype="application/x-www-form-urlencoded" name="liistForm">
                      <table width="100%">
                        <tr><td><input class="pulsante" type="button" style="width:100%" OnClick="preparasql('drugbank');" value="Drugs" /></td></tr>
                        <tr><td><input class="pulsante" type="button" style="width:100%" OnClick="preparasql('omim');" value="Mim" /></td></tr>
                        <tr><td><input class="pulsante" type="button" style="width:100%" OnClick="preparasql('hmdd_disease');" value="Diseases" /></td></tr>
                        <tr><td><input class="pulsante" type="button" style="width:100%" OnClick="preparasql('mirenviroment');" value="Mirna" /></td></tr>                      
                      </table>
		      <input type="hidden" name="table" style="display" value="">
                    </form>
                  </td>
                </tr>
              </table>
              <!-- END "ELENCA" -->
            </td>
            <!-- END LEFT-->
            <!-- BEING RIGHT (Risultato query) -->
            <td id="table-right" align ="center">
                <?
                    if(isset($_POST['table']))
                        echo $table;
                ?>
            </td>
            <!-- END RIGHT (Risultato query) -->
          </tr>
        </table>
	<script type="text/javascript">
	function preparasql(table)
	{
		document.getElementsByName('table')[0].value=table;
		var name="";
		if(table == "drugbank") { name="name"; }
		else if(table == "hmdd_disease") { name="disease"; }
		else if(table == "mirenviroment") { name="phenotype"; }
		else if(table == "omim") { name="genesymbols"; }

		document.getElementById("letters").innerHTML="";
		for (var i = 65; i < 91; i++)
		{
			var sql="SELECT * FROM "+table+" WHERE "+name+" LIKE '&#"+i+"%' ORDER BY "+name;
			document.getElementById("letters").innerHTML+="<a href=\"lista.php?table="+table+"&lettera=&#"+i+"&testo="+sql+"\"><input type=\"button\" value=&#"+i+" style=\"10%:10%\"/></a>";
		}
	}
	</script>
	<div align="center" width="40%">
	<?php
	include "db_connect.php";
	$query=$_GET["testo"];
	$risultato = mysql_query($query);
			
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
	$query_limit = mysql_query($query." LIMIT $primo, $per_page");
	 
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
	    echo "</td>\n </tr>\n";

	// includiamo uno dei files contenenti la paginazione
	include("pagination.php");

        // in questa cella inseriamo la paginazione
	echo " <tr>\n <td height=\"50\" valign=\"bottom\" align=\"center\">$paginazione</td>\n";
	echo " </tr>\n</table>\n</div>";
	echo "<br/><br/><br/><br/>";
  
	mysql_close();
	?>
	</div>
        <!-- Fine Tabella principale -->
      </div>
      <!-- content ends -->
    </div>
  </body>
</html>