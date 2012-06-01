 <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "../db_connect.php";
          
        //ARRAY CONTIENE LE VARIABILI DA INSERIRE NEGLI ATTRIBUTI       
        
        $arr=array('drugbank_id',
        'name',
        'description',
        'pharmacology',
        'toxicity',
        'categories',           //molti
        'atc_code',
        'drug_interactions',    //molti
        'Molecular_Formula',
        'target_partner',       //molti
        'action',               //molti
        'target_position');
        
        //ASSEGNO AD ALCUNE POSIZIONI UN ARRAY DATO CHE CI POSSONO ESSERE PIÙ DATI
        $arr['categories']=array();
        $arr['drug_interactions']=array();
        $arr['target_partner']=array();
        $arr['action']=array();
       
        
        //LEGGO IL FILE
        //$testo=file("./drugbank.txt");
       
        /*$linea=1;
        $rigasuccessiva=-3;
     
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
      
           */
        ?>
    </body>
</html>
