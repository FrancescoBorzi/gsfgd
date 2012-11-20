
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

                
                $query= $_POST["testo"];
	
                $risultato = mysql_query($query) or die("Query fallita: " . mysql_error() );
	
		echo "<table>\n"; 
		while ($linea = mysql_fetch_array($risultato, MYSQL_ASSOC)) { 
			echo "\t<tr>\n"; 
			/*foreach ($linea as $valore_colonna) { 
				echo "\t\t<td>$valore_colonna</td>\n"; 
			} */
                        for ($i = 0; $i < count($linea); $i++)
                        echo "\t\t<td>$linea[$i]</td>\n";
                        
			echo "\t</tr>\n"; 
                } 
		echo"</table>\n"; 
                ?>

	</div>
   </div>
</div>

<!-- content ends -->
</div>

</body>
</html>


