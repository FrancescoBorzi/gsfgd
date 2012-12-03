
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/styleTable.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="main">
<div id="maintop"></div>
<!-- header begins -->
<?php include "header.php"; ?>
<!-- header ends -->
<!-- content begins -->
      <div id="content">
         <div class="boximg_query_back" style="top: 13%; margin: -100px 0 0 96px;">
             <div class="boximg_green"  style="margin-left: -21px ;width:140px;height: 84px;bottom:-55px">
                   <div class="tit" align="center" style="color:white; font-family: Helvetica Neue,Arial,Helvetica,sans-serif;"><b><br />List<br /><br /></b></div>
             </div><br/><br/><br/>
            <div align ="center">  
            
                <?php
                if (isset($_GET["lettera"])) { $lettera =$_GET["lettera"]; } else {  $lettera=$_GET['lettera']="A"; }
                if (isset($_GET["table"])) { $table =$_GET["table"]; } else {  $table="drugbank"; }


                if($table == "drugbank") { $name="name"; }
                else if($table == "hmdd_disease") { $name="disease"; }
                else if($table == "mirenviroment") { $name="phenotype"; }
                else if($table == "omim") { $name="genesymbols"; }

               ?>
            </div>
        <!-- Tabella contenente le due colonne principali -->
         <table width="100%" border="0px" style="vertical-align:text-top"> 
          <tr> 
            <!-- BEING LEFT-->
            <td id="table-left">
              <!-- BEING "ELENCA" -->
             <table width="90%" height="100%" style="margin-left: 30px" > 
               <tr>
                  <td>
                    <form action="lista.php" method="get" enctype="application/x-www-form-urlencoded" name="liistForm">
                      <table width="100%">
                        <tr><td><input class="pulsante" type="button" style="width:100%" OnClick="preparasql('drugbank', this.id);" value="Drugs" id="drugs" /></td>
                        <td><input class="pulsante" type="button" style="width:100%" OnClick="preparasql('omim', this.id);" value="Mim" id="mim" /></td>
                        <td><input class="pulsante" type="button" style="width:100%" OnClick="preparasql('hmdd_disease', this.id);" value="Diseases" id="diseases" /></td>
                        <td><input class="pulsante" type="button" style="width:100%" OnClick="preparasql('mirenviroment', this.id);" value="Mirna" id="mirna" /></td></tr>                      
                      </table>
                        <br/>
		      <input type="hidden" name="table" style="display" value="">
                    </form>
                  </td>
                </tr>
              </table>
              <!-- END "ELENCA" -->
            </td>
            <!-- END LEFT-->
            <?
            
                if(isset($_POST['table']))
                    echo $table;
            ?>
                        <!-- END RIGHT (Risultato query) -->
          </tr>
        </table>
        <?
        $sql="SELECT * FROM $table WHERE $name LIKE '$lettera%' ORDER BY $name";
	echo '<div id="letters" align="center">';
            for($index = 65; $index<78;$index++)
		{
                    echo "<a href=\"lista.php?table=$table&lettera=&#$index&testo=$sql\"><input type=\"button\" value=&#$index style=\"10%:10%\"/></a>";
		}
                echo "<br/>";
                 for($index = 78; $index<91;$index++)
		{
                    echo "<a href=\"lista.php?table=$table&lettera=&#$index&testo=$sql\"><input type=\"button\" value=&#$index style=\"10%:10%\"/></a>";
		}
        echo "</div>";
        echo "<br>";
        ?>
	<script type="text/javascript">
	function preparasql(table, object)
	{
		document.getElementById("drugs").style.backgroundColor='#0095cd';
		document.getElementById("mim").style.backgroundColor='#0095cd';
		document.getElementById("diseases").style.backgroundColor='#0095cd';
		document.getElementById("mirna").style.backgroundColor='#0095cd';
		document.getElementById("drugs").style.borderColor='#bbbbbb';
		document.getElementById("mim").style.borderColor='#bbbbbb';
		document.getElementById("diseases").style.borderColor='#bbbbbb';
		document.getElementById("mirna").style.borderColor='#bbbbbb';
		document.getElementById(object).style.backgroundColor='red';
		document.getElementById(object).style.borderColor='orange';

		document.getElementsByName('table')[0].value=table;
		var name="";
		if(table == "drugbank") { name="name"; }
		else if(table == "hmdd_disease") { name="disease"; }
		else if(table == "mirenviroment") { name="phenotype"; }
		else if(table == "omim") { name="genesymbols"; }

		document.getElementById("letters").innerHTML="";
		for (var i = 65; i < 78; i++)
		{
                    var sql="SELECT * FROM "+table+" WHERE "+name+" LIKE '&#"+i+"%' ORDER BY "+name;
                    document.getElementById("letters").innerHTML+="<a href=\"lista.php?table="+table+"&lettera=&#"+i+"&testo="+sql+"\"><input type=\"button\" value=&#"+i+" style=\"10%:10%\"/></a>";
		}
		document.getElementById("letters").innerHTML+="<br/>";
		for (var i = 78; i < 91; i++)
		{
                    var sql="SELECT * FROM "+table+" WHERE "+name+" LIKE '&#"+i+"%' ORDER BY "+name;
                    document.getElementById("letters").innerHTML+="<a href=\"lista.php?table="+table+"&lettera=&#"+i+"&testo="+sql+"\"><input type=\"button\" value=&#"+i+" style=\"10%:10%\"/></a>";
		}
	}
	</script>
	<div align="center" width="40%">
	<?php
	include "db_connect.php";
        if(isset($_GET["testo"])){
            $query=$_GET["testo"];
        
        //else $query="SELECT * from drugbank";
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
	include("pagination.php");

        // in questa cella inseriamo la paginazione
	echo " <tr>\n <td height=\"50\" valign=\"bottom\" align=\"center\">$paginazione</td>\n";
	echo " </tr>\n</table>\n</div>";
	echo "<br/><br/><br/><br/>";			 
	// esecuzione seconda query con LIMIT
	$query_limit = mysql_query($query." LIMIT $primo, $per_page");
	  
        echo "<div style=\"margin-left: -260px; margin-right: 90px; width:1300px\">
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
        }
	mysql_close();
	?>
	</div>
        
        <!-- Fine Tabella principale -->
                </div>
      <!-- content ends -->
            </div>
         </div>
    </body>
</html>