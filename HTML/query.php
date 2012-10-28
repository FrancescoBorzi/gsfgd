
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
	<head>    
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />    
		<title>SAMM's Project - Custom Query
		</title>    
		<meta name="keywords" content="" />    
		<meta name="description" content="" />    
		<link href="styles.css" rel="stylesheet" type="text/css" />  
	</head>  
	<body>    
		<div id="main">      
			<div id="maintop">
				<img src="images/header.jpg" width="100%" height="20px"/>
			</div>      
			<!-- header begins -->      
			<div id="header">        
				<div id="buttons">          
					<a href="index.php"  title="">Home</a>          
					<a href="find.php" title="">Search</a>          
					<a href="list.php" title="">List</a>          
					<a href="query.php" title="">Custom Query</a>        
				</div>        
				<div id="logo">
					<img src="images/header.jpg" width="100%" height="100%"/>
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
									<form action="result-query.php" enctype="multipart/form-data" method="POST">                      
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
                            <p><strong>atc_code</strong> (<u>association_id</u>, atc_code, drug_id);<br />
                              <strong>category</strong> (<u>membership_id</u>, category, drug_id);<br />
                              <strong>cure</strong>  (<u>cure_id</u>, drug_id, partner, action, position);<br />
                              <strong>disease </strong>(<u>disease_id</u>, name, code, path, type, subtype);<br />
                              <strong>drug</strong>  (<u>drug_id</u>, type, name, description, toxicity, pharmacology, smiles,  molecular_formula);<br />
                              <strong>gene</strong>  (<u>gene_id</u>, hgnc_id, name,  hgncNotAvaible, partner);<br />
                              <strong>gene_disease</strong> (<u>gene_disease_id</u>, disease_name, hgnc_id, gene_behavior, ko);<br />
                              <strong>interaction</strong> (<u>interaction_id</u>, drug_1, drug_2, description);</p>
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