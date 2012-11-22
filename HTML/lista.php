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
      <div id="bar"></div><H2 align="center"><b><br />List<br /><br /></b></H2>
                    
                    <div  align="center">
                        <form action="alfabeto.php" method="post" enctype="application/x-www-form-urlencoded" name="alfabeto">
                            <table>
                                <input  type="submit" value="A" style="10%:10%"/>
                                <input  type="submit" value="B" style="10%:10%"/>
                                <input  type="submit" value="C" style="10%:10%"/>
                                <input  type="submit" value="D" style="10%:10%"/>
                                <input  type="submit" value="E" style="10%:10%"/>
                                <input  type="submit" value="F" style="10%:10%"/>
                                <input  type="submit" value="G" style="10%:10%"/>
                                <input  type="submit" value="H" style="10%:10%"/>
                                <input  type="submit" value="I" style="10%:10%"/>
                                <input  type="submit" value="L" style="10%:10%"/>
                                <input  type="submit" value="M" style="10%:10%"/>
                                <input  type="submit" value="N" style="10%:10%"/>
                                <input  type="submit" value="O" style="10%:10%"/>
                                <input  type="submit" value="P" style="10%:10%"/>
                                <input  type="submit" value="Q" style="10%:10%"/>
                                <input  type="submit" value="R" style="10%:10%"/>
                                <input  type="submit" value="S" style="10%:10%"/>
                                <input  type="submit" value="T" style="10%:10%"/>
                                <input  type="submit" value="U" style="10%:10%"/>
                                <input  type="submit" value="V" style="10%:10%"/>
                                <input  type="submit" value="Z" style="10%:10%"/>
                            </table
                        </form>
      <!-- content begins -->
      <div id="content" align="left">
          
        <!-- Tabella contenente le due colonne principali -->
        <table width=65% border=0px style="vertical-align:text-top"> 
          <tr> 
            <!-- BEING LEFT-->
            <td id="table-left" >
              <!-- BEING "ELENCA" -->
              <table width="100%" height="100%"> 
                <tr>
                  <td>
                    <div class="tit"><h1>LIST</h1></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <form action="lista.php" method="post" enctype="application/x-www-form-urlencoded" name="liistForm">
                      <table width="100%">
                        <tr><td><input class="btn" name="list" type="submit" value="Drugs" style="width:100%"/></td></tr>
                        <tr><td><input class="btn" name="list" type="submit" value="Mim" style="width:100%"/></td></tr>
                        <tr><td><input class="btn" name="list" type="submit" value="Diseases" style="width:100%"/></td></tr>
                        <tr><td><input class="btn" name="list" type="submit" value="Mirna" style="width:100%"/></td></tr>
                      
                      </table>
                    </form>
                  </td>
                </tr>
              </table>
              <!-- END "ELENCA" -->
            </td>
            <!-- END LEFT-->
            <!-- BEING RIGHT (Risultato query) -->
            <td id="table-right" align="center">
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


