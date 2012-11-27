<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>gsfgd's Project - Home</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    .bold {
	font-weight:bold; 
	color:black;
    }
    </style>
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
	    <script type="text/javascript">
	    function mysql_send()
	    {
		if(document.getElementsByName('confirm')[0].value == "true")
		{
			return true;
		}
		else
		{
			return false;
		}
	    }
	    </script>	    
            <td id="table-right" align ="center">
              No operation performed.<br>Please select one or more tag and chose an operation from the available.
		<form action="cerca.php" method="post" OnSubmit="return mysql_send(this)" name="form">
		<input type="text" style="display:none;" name="confirm" value="false" />
		<select name="tabs" OnChange="document.getElementsByName('confirm')[0].value='true'; result(this); document.getElementsByName('form')[0].submit();">
		<option>--</option>
		<?php
                include "db_connect.php";
		$query_tables=mysql_query("SHOW TABLES FROM $database");
		while($row_tables=mysql_fetch_array($query_tables))
		{
			$c=0;
			$query_columns=mysql_query("SHOW COLUMNS FROM ".$database.".{$row_tables['Tables_in_'.$database]}") or die(mysql_error());
			while ($row_columns=mysql_fetch_assoc($query_columns))
			{
				if($c==0)
				{
					$c=1;
					echo "<option value=\"".htmlspecialchars($row_tables['Tables_in_'.$database])."\" class=\"bold\" disabled=\"disabled\">".htmlspecialchars($row_tables['Tables_in_'.$database])."</option>\n";
				}
				echo "<option value=\"".htmlspecialchars($row_columns['Field'])."\" Id=\"{$row_tables['Tables_in_'.$database]}\">".htmlspecialchars($row_columns['Field'])."</option>\n";
			}
		}
		?>
		</select>
		<input type="text" name="table" style="display:none;" />
		</form>
		<script type="text/javascript">
		function result(select)
		{
			document.getElementsByName("table")[0].value=select.options[select.selectedIndex].id;
		}
		</script>
		<?php
		if($_POST['confirm'] == "true")
		{
			$select=$_POST['tabs'];
			$table=$_POST['table'];
			$query=mysql_query("SELECT $select FROM $table");
			echo "<table border=\"1\" style=\"border-color:#00ff00;\">\n";
			while ($linea = mysql_fetch_array($query))
			{
				echo "\t<tr>\n";
				$index=count($linea)/2;
				for ($i = 0; $i < $index; $i++)
				{
					echo "\t\t<td>$linea[$i]</td>\n";
				}
				echo "\t</tr>\n";
			}
			echo"</table>\n";
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
