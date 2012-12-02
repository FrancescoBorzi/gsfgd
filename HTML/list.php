<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <style type="text/css">
    a { color:white; }
    a:hover { color:#00ff00; }
    body { color:#00ff00; }
    </style>
  </head>
  <body>
    <div id="main">
     
      <!-- header begins -->
      <?php include "header.php"; ?>
      <!-- header ends -->
     
      <!-- content begins -->
      <div id="content">
         
        <div align ="center"> 
            <div class="boximg_query_back">  
        <?php
	if (isset($_GET["lettera"])) { $lettera =$_GET["lettera"]; } else {  $lettera=$_GET['lettera']="A"; }
	if (isset($_GET["table"])) { $table =$_GET["table"]; } else {  $table="drugbank"; }


	if($table == "drugbank") { $name="name"; }
	else if($table == "hmdd_disease") { $name="disease"; }
	else if($table == "mirenviroment") { $name="phenotype"; }
	else if($table == "omim") { $name="genesymbols"; }
	
       ?>
       
       
        <!-- Tabella contenente le due colonne principali -->
        <table width="65%" border="0px" style="vertical-align:text-top"> 
          <tr> 
            <!-- BEING LEFT-->
            <td id="table-left">
              <!-- BEING "ELENCA" -->
              <table width="50%" height="100%" > 
               <tr>
                  <td>
                    <form action="lista.php" method="get" enctype="application/x-www-form-urlencoded" name="liistForm">
                      <table width="100%">
                        <tr><td><input class="pulsante" type="button" value="Drugs" OnClick="preparasql('drugbank');"><br/></td>
                        <td><input class="pulsante" type="button" value="Mim" OnClick="preparasql('omim');"><br/></td>
                        <td><input class="pulsante" type="button" value="Diseases" OnClick="preparasql('hmdd_disease');"><br/></td>
                        <td><input class="pulsante" type="button" value="Mirna" OnClick="preparasql('mirenviroment');" /><br/></td></tr>                      
                      </table>
		      <input type="hidden" name="table" style="display" value="">
                    </form>
                  </td>
                </tr>
              </table>
               <!-- END "ELENCA" -->
            </td>
            <!-- END LEFT-->
          </tr>
        </table>
        <?
        $sql="SELECT * FROM $table WHERE $name LIKE '$lettera%' ORDER BY $name";
	
        echo '<div id="letters" align="center">';
            for($index = 65; $index<78;$index++)
		{
                    //echo "<a href=\"lista.php?table=$table&lettera=&#$index&testo=$sql\"><input type=\"button\" value=&#$index style=\"10%:10%\"/></a>";
		}
                echo "<br>";
                 for($index = 78; $index<91;$index++)
		{
                    //echo "<a href=\"lista.php?table=$table&lettera=&#$index&testo=$sql\"><input type=\"button\" value=&#$index style=\"10%:10%\"/></a>";
		}
        echo "</div>";
        ?>
       
                </div>
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
        mysql_close();	
	?>
	</div>
        <!-- Fine Tabella principale -->
      </div>
      <!-- content ends -->
    </div>
  </body>
</html>