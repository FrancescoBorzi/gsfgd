
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
<div align="center" id="content">
    <!--<div class="tit"><h1 style="padding-left: 320px;">HOME PAGE</h1></div>-->
       	<link rel="stylesheet" href="css/default.css" type="text/css" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<center>
          <div class="boximg">  
              <div class="boximg_orange"  style="margin-left: -668px ;width:140px;height: 84px;bottom:-40px">
                   <div class="tit" align="center" style="color:white; font-family: Helvetica Neue,Arial,Helvetica,sans-serif;"><b><br />Home<br /><br /></b></div>
             </div>
              <br/><br/>
        <div id="wrapper" style="width:600px; height:300px;">
	<div class="slider-wrapper theme-default">
	    <div id="slider" class="nivoSlider">
    		<img  src="images/Bioinformatics1.jpg" title="WTF" />
		<img  src="images/drugbank2.jpg" title="www.drugbank.ca/" />
		<img src="images/omim2.jpg" title="omim.org/"/>
		<img src="images/miren2.jpg" title="202.38.126.151/hmdd/mirna/md/"/>
		<img src="images/human2.jpg" title="202.38.126.151/hmdd/tools/miren.html"/>
	    </div>	    
	</div>
	</div>
        <div style="margin-left:680px;">
          <!--<div class="boximg_dnaBack"  style="margin-left: -668px ;width:140px;height: 632px;bottom:-40px">-->
            <div class="boximg_dna" style="bottom:-200px;"><img src="images/dnaLast.gif" width="40%" height="40%"></img>
            <!--</div>-->
             </div>
        </div>
        <div class="boximg2">
            <div class="boxtesto" style="bottom:10px;">
               <div style="margin-left:20px; margin-right: 20px;"> <!--DIV CHE ALLONTANA IL TESTO DAL BOX-->
                <span class="testo" style="m:10px">
                    <H2 align="center"><b><br />Welcome!<br /><br /></b></H2>
                    Our website manage a database that includes drugs, diseases, miRNA, you can choose this main function:<br />
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
            </center>
         
        </div>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
	$(window).load(function() {
	$('#slider').nivoSlider();
	});
        
	</script> 
        </center>
	     
<!-- content ends -->
</body>
</html>
