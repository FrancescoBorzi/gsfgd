
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
<div id="maintop"><link href="HTML/styles.css" rel="stylesheet" type="text/css" /></div>
<!-- header begins -->
<div id="header">
	
       <div id="logo"><link href="HTML/styles.css" rel="stylesheet" type="text/css" /></div>
       <div id="buttons">
		<a href="index.php"  title="">Home</a>
		<a href="find.php" title="">Search</a>
		<a href="list.php" title="">List</a>
   		<a href="query.php" title="">Custom Query</a>
	</div>
</div>
<!-- header ends -->
<!-- content begins -->
<div id="content">
    <div class="tit"><h1>HOME PAGE</h1></div>
        <div id="home-descr" align="center">
          <H2 align="center"><b><br />Welcome!<br /><br /></b></H2>
	  <div  align="justify">
            Our site maintains a database containing various information of genetic diseases, drugs and genes. There are three main functions:<br />
			<ul>
			  <li><b>Search by tag:</b> you can select to execute a query on our database, choosing among the available options. The queries are grouped by the entities involved;</li>
			  <li><b>List:</b> you can list all the diseases (in alphabetical order and grouped into types and subtypes), all the genes (in alphabetical order) and all the drugs (in alphabetical order and grouped into categories);</li>
			  <li><b>Custom query:</b> the user has the possibility to manually write a query in SQL code.</li>
		    </ul>
            <br />Clicking on "Custom Query" you can also see the list of tables with their attributes.
   			<br /><br />
   			<b><u>Database structure:</u></b><br /><br />
			Our database not only contains information on drugs, genes and diseases, it also stores two main relationships between them:<br />
			<ul>
				<li>The table "cure" contains information related to the action of drugs on genes;</li>
				<li>The table "gene_disease" stores the genes involved in each disease.</li>
			</ul>
            <br />The information regarding the interactions between drugs are contained in the "interaction" table, while in the tables "category" and "atc_code" are present, respectively, membership categories and the ATC-codes of each drug.
            <br /><br />
            <b><u>Data source:</u></b><br /><br />
			The data relating the drugs, genes and diseases are derived from databases residing in the following sites:<br />
			<ul>
				<li><a href="http://www.drugbank.ca/" target="_blank">www.drugbank.ca</a></li>
				<li><a href="http://www.genome.jp/" target="_blank">www.genome.jp</a></li>
				<li><a href="http://www.genenames.org/" target="_blank">www.genenames.org</a></li>
			</ul>
            <br /><br />
            <b><u>About us:</u></b><br /><br />
			The site was created by four students of the University of Catania:<br />
			<ul>
				<li>Cali' Salvatore</li>
				<li>Borzi' Francesco</li>
				<li>Gelardi Gabriele</li>
				<li>Dario Lanza</li>
				<li>GARMANA E' FUORI</li>
			</ul>
            <br /><br />
            <b><u>Contact:</u></b><br /><br />
            <a href="mailto:EMAIL">EMAIL</a>
            <br /><br />
	</div>
   </div>
</div>

<!-- content ends -->
</div>

</body>
</html>
