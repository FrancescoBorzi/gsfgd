<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery UI Autocomplete - Default functionality</title>
    <link rel="stylesheet" href="jquery-ui.css" />
    <script src="jquery-1.8.3.js"></script>
    <script src="jquery-ui.js"></script>
    
   
  
   
</head>
<body>
 
<div class="ui-widget">
    <input id="tags" />
</div>
  <?
      $ciao2=array();
      $ciao2[0]="asssaaaas";
      $ciao2[1]="oo";
      $ciao2[2]="emncastqyuioasdsgycszs";
    ?>
   <script language="javascript">
    $(function() {
        
        <!--	
        var variabile=new Array(); 
        <?php
        for($i=0;$i<count($ciao2);$i++)
        {
        ?>	
        variabile[<?php echo $i; ?>]="<?php echo "$ciao2[$i]"; ?>";


        <?php
        }
        ?>
        //-->	
        
        $( "#tags" ).autocomplete({
            source: variabile
        });
    });
  
    </script>
    
</body>
</html>