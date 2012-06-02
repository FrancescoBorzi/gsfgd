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
        
        while(list(,$value)= each($testo)) {
            if($value!="---\n"){
                if($value=="?\n"){
                   while((list(,$value)= each($testo))){
                        if($value!="?/\n"){
                            multipli($arr,$indice,$value,$indiceMul);
                        }
                        else break;
                    }
                    $indiceMul=0;
                }
                else{
                    $arr[$indice]=$value;
                    //echo $value;      
                }
                //echo "{$arr[$indice]}  $indice\n\n\n";
                $indice++;
            }
            else{
                $indice=0;
                //insertDB($arr);
            }
        }
                
        function multipli (&$arr,$indice,$contenuto,&$indiceMul){
            $tmp=$arr[$indice];
            $tmp=$arr[$tmp];
            $tmp[$indiceMul]=$contenuto;
            //echo $tmp[$indiceMul]."\n";
            $indiceMul++;
        }
        
        function getSubArray(&$arr,&$subArr,$indice){
            $tmp=$arr[$indice];
            $tmp=$arr[$tmp];
            $subArr=$tmp;
            
        }
        
        function insertDB(&$arr){
            $i=0;
            $subArr;
            while($i<12){
                if($i==5||$i==7||$i==9||$i==10){
                    getSubArray($arr, $subArr, $i);
                    //COME STIAMO IMPOSTANDO LE TABELLE?? DOVE METTO QUESTI ATTRIBUTI MULTIPLI?
                }
                else{
                    //mysql_query("INSERT INTO drugID VALUES ('$tmp','$value,'$tmp33','$tmp44')")or die (mysql_error());
                 
                }
            }
            
        }
        
        ?>
    </body>
</html>
