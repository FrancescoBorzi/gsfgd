 <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include "accediDB.php";
        connetti();
        
        $nomeDB="drugbank";
        $qDB="CREATE DATABASE IF NOT EXISTS $nomeDB";
        $sql = mysql_query($qDB) or die (mysql_error());
        
        $db=mysql_select_db($nomeDB) or die (mysql_error());
        
        $qcrea="CREATE TABLE IF NOT EXISTS drugID(ATC_code VARCHAR(50), drugID(idDrug VARCHAR(50),Description VARCHAR(1000), Drug_Category VARCHAR(500))";
        mysql_query($qcrea) or die (mysql_error());
        //$qcrea="ALTER TABLE drugID ADD ATC_code VARCHAR(50)";
        //mysql_query($qcrea) or die (mysql_error());
        
        echo "dio\n";
        
        
        $par="DPD_Drug_ID_Number";
        $par2="ATC_Codes";
        $par3="Description";
        $par4="Drug_Category";
        
        $tmp="";
        $tmp33="";
        $tmp44="";
        
        $testo=file("./drugbank.txt");
        //reset($testo);
        $linea=1;
        $rigasuccessiva=-3;
        
        $str11=false;
        $str22=false;
        $str33=false;
        $str44=false;
        
        //$write_file = fopen("./out.txt","w+");
        while(list(,$value)= each($testo)) {
        
            $str=strpos($value,$par);
            $str2=strpos($value,$par2);
            $str3=strpos($value,$par3);
            $str4=strpos($value,$par4);
           
            
            if($str!=false || $str2!=false || $str3!=false || $str4!=false){
             
                if($str!=false)$str11=true;
                if($str2!=false)$str22=true;
                if($str3!=false)$str33=true;
                if($str4!=false)$str44=true;
                //print_r("$value\n");
                //print_r("$linea\n");
                $rigasuccessiva=$linea;
                
             }
    
            if(($rigasuccessiva+1)==($linea)){
              
                 if($str11){echo "ci sono";
                     //mysql_query("INSERT INTO drugID VALUES ('$tmp','$value')")or die (mysql_error());
                     $str11=false;//IDdrug
                     }
                 if($str22){
                     $tmp=$value;//atc
                     $str22=false;
                  }
                  if($str33){
                     $tmp33=$value;//Description
                     $str33=false;
                  }
                  if($str44){
                     $tmp44=$value;//Categories
                     mysql_query("INSERT INTO drugID VALUES ('$tmp','$value,'$tmp33','$tmp44')")or die (mysql_error());
                     $str44=false;
                  }
                 
                //print_r("$value\n");
                //print_r("$linea\n");
             }
            $linea++;
                
        }
                 // fclose(@$write_file);   
      
           
        ?>
    </body>
</html>
