
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
        <!-- Tabella contenente le due colonne principali -->
        <table width=65% border=0px style="vertical-align:text-top"> 
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
                    <form action="list.php" method="post" enctype="application/x-www-form-urlencoded" name="liistForm">
                      <table width="100%">
                        <tr><td><input class="btn" name="list" type="submit" value="Drugs" style="width:100%"/></td></tr>
                        <tr><td><input class="btn" name="list" type="submit" value="Genes" style="width:100%"/></td></tr>
                        <tr><td><input class="btn" name="list" type="submit" value="Diseases" style="width:100%"/></td></tr>
                      </table>
                    </form>
                  </td>
                </tr>
              </table>
              <!-- END "ELENCA" -->
            </td>
            <!-- END LEFT-->
            <!-- BEING RIGHT (Risultato query) -->
            <td id="table-right">
              Choose an option.</td>
            <!-- END RIGHT (Risultato query) -->
          </tr>
        </table>
        <!-- Fine Tabella principale -->

      </div>

      <!-- content ends -->

    </div>
  </body>
</html>

