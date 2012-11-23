<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>gsfgd's Project - Home</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    a { color:white; }
    a:hover { color:#00ff00; }
    body { color:#00ff00; }
    </style>
  </head>
  <body>
    <div id="main">
      <div id="maintop"></div>
      <!-- header begins -->
      <div id="header">
        
        <div id="logo"></div>
	<div id="buttons">
          <a href="index.php"  title="">Home</a>
          <a href="search.php" title="">Search</a>
          <a href="list.php" title="">List</a>
          <a href="query.php" title="">Custom Query</a>
        </div>
      </div>
      <!-- header ends -->
      <div id="bar"></div>
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
			//echo "<a href=\"http://gsfgdproject.altervista.org/HTML/lista.php?table=$table&lettera=&#$index&testo=$sql\"><input type=\"button\" value=&#$index style=\"10%:10%\"/></a>";
                                            
                }
                echo "<br>";
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
                    <div class="tit"><h1>LIST</h1></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <form action="lista.php" method="get" enctype="application/x-www-form-urlencoded" name="liistForm">
                      <table width="100%">
                        <tr><td><input class="btn" type="button" style="width:100%" OnClick="preparasql('drugbank');" value="Drugs" /></td></tr>
                        <tr><td><input class="btn" type="button" style="width:100%" OnClick="preparasql('omim');" value="Mim" /></td></tr>
                        <tr><td><input class="btn" type="button" style="width:100%" OnClick="preparasql('hmdd_disease');" value="Diseases" /></td></tr>
                        <tr><td><input class="btn" type="button" style="width:100%" OnClick="preparasql('mirenviroment');" value="Mirna" /></td></tr>                      
                      </table>
		      <input type="text" name="table" style="display" value="">
                    </form>
                  </td>
                </tr>
              </table>
              <!-- END "ELENCA" -->
            </td>
            <!-- END LEFT-->
            <!-- BEING RIGHT (Risultato query) -->
            <td id="table-right" align ="center">
              Choose an option.
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
			document.getElementById("letters").innerHTML+="<a href=\"http://gsfgdproject.altervista.org/HTML/lista.php?table="+table+"&lettera=&#"+i+"&testo="+sql+"\"><input type=\"button\" value=&#"+i+" style=\"10%:10%\"/></a>";
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