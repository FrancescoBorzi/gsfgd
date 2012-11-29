
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
                <div id="content">        
                    <!-- Tabella contenente le due colonne principali -->  
                    <center>      
			<table width="65%" border="0px" style="vertical-align:text-top">            
                            <tr>              
				<!-- BEING LEFT-->             
				<td id="table-left">              
                                    <!-- BEING "TITOLO" -->              
                                    <table width="70%">                  
					<tr>  
                                            <td>                    
						<div class="tit"><h1>Custom Query</h1></div>
                                            </td>                
					</tr>                
					<tr>                 
                                            <td>                    
						<form action="result.php" enctype="multipart/form-data" method="GET">                      
                                                    <div align="center">
							<textarea rows="20" cols="50" name="testo"></textarea>	                       
								 <input class="pulsante" type="submit" name="submit" value="run" style="width:50%"/>
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
                                    <div class="boximg_query">
                                        <div class="boxtesto_query"> 
                                            <div style="margin:10px">
                                                <span class="testo"><br>
                                                    <h2><b>Database's tables:<br /><br /></b></h2>
                                                    <p><strong>drugbank</strong> (<u>id</u>, type,name, description, pahrmacology, toxicity);<br /><br />
                                                    <strong>hgnc</strong> (<u>id</u>, Approved_symbol, Approved_name, Status, Previous_symbols, Previous_names, Synonyms, Name_synonyms, Chromosome,  Accession_numbers, Entrez_geneId, Ensembl_geneId, Refseq_id, Omim_id, Ucsc_id);<br /><br />
                                                    <strong>hmdd_disease</strong>  (<u>mirna</u>,<u> disease</u>);<br /><br />
                                                    <strong>mirenviroment</strong>  (<u>mirnaID</u>, mirnaGene, mirnaProduct, mirnaProductOriginal, phenotype, environmentalFactor, conditionOfEF, sample,  species, evidence, pubMedID);<br /><br />
                                                    <strong>omim</strong>  (<u>mim</u>, genesymbols, disorders);<br /><br />
                                                </span>
                                            </div>
                                        </div>
                                </div>
                            </td>                          
                             <!-- END RIGHT (Risultato query) -->                          
                        </tr>                          
		</table>                          
				<!-- Fine Tabella principale -->
            </center>                          
	</div>                          
			<!-- content ends -->    
	</div>    
	</body>
</html>
