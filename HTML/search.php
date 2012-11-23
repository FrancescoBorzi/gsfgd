
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>gsfgd's Project - Home</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="query_desc.js"></script>
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
              <table width="100%"> 
                <tr>
                  <td>
                    <div class="tit"><h1>SEARCH BY TAGS</h1></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <font size="3">
                      <input id="Checkbox1" type="checkbox" size="10px" onclick="setState(this)"/>&nbsp;Drugs<br><input id="Checkbox2" type="checkbox" size="10px" onclick="setState(this)"/>&nbsp;Genes<br><input id="Checkbox3" type="checkbox" size="10px" onclick="setState(this)"/>&nbsp;Diseases                    </font>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div id="divQueryDescription" style="vertical-align:sub"></div>
                  </td>
                </tr>
              </table>
            </td>
            <!-- END LEFT-->
            <!-- BEING RIGHT (Risultato query) -->
            <td id="table-right">
              No operation performed.<br>Please select one or more tag and chose an operation from the available.</td>
            <!-- END RIGHT (Risultato query) -->
          </tr>
        </table>
        <!-- Fine Tabella principale -->

      </div>

      <!-- content ends -->

    </div>
  </body>
</html>
