
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>

<div id="main">
<div id="maintop"></div>
<!-- header begins -->
<?php include "header.php"; ?>
<!-- header ends -->
<!-- content begins -->
<div aligh="center" id="content">
    <!--<div class="tit"><h1 style="padding-left: 320px;">HOME PAGE</h1></div>-->
       
    

       <div class="boximg">
           <marquee behavior="scroll" onclick=this.stop() onmouseout=this.start() direction="down" scrollAmount="20" width="400" height="1100">
	<a>
	<img src="images/scroll/verticale/b2.jpg" align="100" width="larghezza_pixel_foto" height="altezza_pixel_foto"><br />
	<img src="images/scroll/verticale/c2.jpg" align="100" width="larghezza_pixel_foto" height="altezza_pixel_foto"><br />
	<img src="images/scroll/verticale/d2.jpg" align="100" width="larghezza_pixel_foto" height="altezza_pixel_foto"><br />
	<img src="images/scroll/verticale/e2.jpg" align="100" width="larghezza_pixel_foto" height="altezza_pixel_foto"><br />
	<img src="images/scroll/verticale/i2.jpg" align="100" width="larghezza_pixel_foto" height="altezza_pixel_foto"><br />
	<img src="images/scroll/verticale/g2.jpg" align="100" width="larghezza_pixel_foto" height="altezza_pixel_foto"><br />
        <img src="images/scroll/verticale/h2.jpg" align="100" width="larghezza_pixel_foto" height="altezza_pixel_foto"><br />
        </a>
        </marquee>
            <div class="boxtesto">
                <span class="testo">
                    <H2 align="center"><b><br />Welcome!<br /><br /></b></H2>
                    Our website menage a database that includes drugs, diseases, miRNA, you can choose this main function:<br />
			<ul>
			  <li><b>Search:</b><br/>select a table's field, and write a word on the text-area, this ones will be  
                                              searched in all the table's field.
                          </li>
                          <li><b>List:</b><br/>show item inside selected tables sorted alphabetically, depending 
                                            on the selected letter that you choose.
                          </li>
			  <li><b>Custom query:</b><br/>you can write your own query, being careful to make NO mistakes.<br/>
                                                    Of course will be shown all tables attributes.
                          </li>
                        </ul>
                        <br/>
   			<br /><br />
   			<b><u>Database structure:</u></b><br /><br />
			Our database not only contains information on drugs, genes and diseases, it also stores two main relationships between them:<br />
			<ul>
				<li>The table "cure" contains information related to the action of drugs on genes;</li>
				<li>The table "gene_disease" stores the genes involved in each disease.</li>
			</ul>
            <br />The information regarding the interactions between drugs are contained in the "interaction" table, while in the tables "category" and "atc_code" are present, respectively, membership categories and the ATC-codes of each drug.
            <br /><br />
            <b><u>Net Source:</u></b><br /><br />
			All our material come from this sites:<br />
			<ul>
				<li><a href="http://www.drugbank.ca/" target="_blank">DrugBank</a></li>
				<li><a href="http://www.omim.org/" target="_blank">OMIM</a></li>
				<li><a href="http://202.38.126.151/hmdd/tools/miren.html" target="_blank">miREnvironment</a></li>
				<li><a href="http://202.38.126.151/hmdd/mirna/md/" target="_blank">HMDD</a></li>
			</ul>
            <br /><br />
            <b><u>About us:</u></b><br /><br />
			The site was created by five students of the University of Catania:<br />
			<ul>
				<li>Salvatore Cali'</li>
				<li>Francesco Borzi' </li>
				<li>Gabriele Gelardi</li>
				<li>Dario Lanza</li>
				<li>Germana Natalia La Rocca</li>
			</ul>
            <br /><br />
            <b><u>Contact:</u></b><br /><br />
            <a href="mailto:gsfgdproject@gmail.com">Our EMAIL : gsfgdproject@gmail.com</a>
            <br /><br /></span>
            </div>
        </div>
</div>
 
</div>

<!-- content ends -->

</body>
</html>
