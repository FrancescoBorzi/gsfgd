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
          <H2 align="center"><b><br />List<br /><br /></b></H2>
	  <div  align="justify">
                <?php
                
                include "db_connect.php";
                
                
                
                
                
                mysql_close();
	               
                ?>

	</div>
   </div>
</div>

<!-- content ends -->
</div>

</body>
</html>


