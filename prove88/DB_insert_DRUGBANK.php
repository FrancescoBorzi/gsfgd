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
        $testo=file("./drugbank.txt");
        $indice=0;
        $indiceMul=0;
        $i=0;
        
        
        while(list(,$value)= each($testo)) {
        
            if(!strpos($value,"<")){
                $arr['$indice']=$value;
                      
            }
            else {
                while((list(,$value)= each($testo))&& $i<1){
                    multipli($arr,$indice,$value);
                    $i++;
                    
                }
            }
            
            echo $arr['$indice'];
            $indice++;               
            //print_r("$linea\n");
              
        }
        //mysql_query("INSERT INTO drugID VALUES ('$tmp','$value,'$tmp33','$tmp44')")or die (mysql_error());
        function multipli (&$array,$indice,$contenuto){
            $tmp=$array[$indice];
            $tmp['$indiceMul']=$contenuto;
            $indiceMul++;
             
        }
        
        ?>
    </body>
</html>
