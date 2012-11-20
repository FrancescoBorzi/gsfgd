
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
			<div id="maintop">
				<link href="styles.css" rel="stylesheet" type="text/css" />
			</div>      
			<!-- header begins -->      
			<div id="header">        
				
				<div id="logo">
					<link href="styles.css" rel="stylesheet" type="text/css" />
				</div> 
				<div id="buttons">          
					<a href="index.php"  title="">Home</a>          
					<a href="search.php" title="">Search</a>          
					<a href="list.php" title="">List</a>          
					<a href="query.php" title="">Custom Query</a>        
				</div>        				
			</div>      
			<!-- header ends -->      
			<div id="bar">
			</div>      
			<!-- content begins -->      
			<div id="content">        
				<!-- Tabella contenente le due colonne principali -->        
				<table width=65% border=0px style="vertical-align:text-top">            
					<tr>              
						<!-- BEING LEFT-->             
						<td id="table-left">              
							<!-- BEING "TITOLO" -->              
							<table width="70%">                  
								<tr>  
                                  <td>                    
									<div class="tit"><h1>Custom Query</h1>
									</div>
                                  </td>                
								</tr>                
								<tr>                 
                                  <td>                    
									<form action="resul.php" enctype="multipart/form-data" method="POST">                      
										<div align="center">
										  <textarea rows="20" cols="50" name="testo"></textarea>	                       
										  <input class="btn" type="submit" name="submit" value="run" style="width:50%" onclick="this.form.target='_blank';return true;"/>
									  </div> 
                                     
									</form>
                                  </td>
                                </tr>                          
							</table>                            
							<!-- END "TITOLO" -->
                        </td>                          
						<!-- END LEFT-->                          
						<!-- BEING RIGHT (Risultato query) -->                          
						<td id="table-right">
                          <div style="margin:10px">
                          	<h2><b>Database's tables:<br /><br /></b></h2>
                            <p><strong>drugbank</strong> (<u>id</u>, type,name, description, pahrmacology, toxicity);<br /><br />
                              <strong>hgnc</strong> (<u>id</u>, Approved_symbol, Approved_name, Status, Previous_symbols, Previous_names, Synonyms, Name_synonyms, Chromosome,  Accession_numbers, Entrez_geneId, Ensembl_geneId, Refseq_id, Omim_id, Ucsc_id);<br /><br />
                              <strong>hmdd_disease</strong>  (<u>mirna</u>,<u> disease</u>);<br /><br />
			<strong>mirenviroment</strong>  (<u>mirnaID</u>, mirnaGene, mirnaProduct, mirnaProductOriginal, phenotype, environmentalFactor, conditionOfEF, sample,  species, evidence, pubMedID);<br /><br />
                              <strong>omim</strong>  (<u>mim</u>, genesymbols, disorders);<br /><br />
			</div>
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