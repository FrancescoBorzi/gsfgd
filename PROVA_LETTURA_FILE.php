<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "dio\n";
             
        $par="DPD_Drug_ID_Number";
        $testo=file("./files/DrugBank/drugbank.txt");
        reset($testo);
        $linea=1;
        $rigasuccessiva=1;
        //$limiteRicerca=2000;
        //$percorso="/home/fortunso/Scrivania/out.txt";
        //$write_file = fopen("./out.txt","w");
        while(list(,$value)= each($testo)) {
        
            $str=strpos($value,$par);
           
            if($str!=false){
               
                print_r("$value\n");
                //print_r("$linea\n");
                $rigasuccessiva=$linea;
                //fwrite($write_file,"$value\n");
                file_put_contents($percorso, $value );
            }
    
            if(($rigasuccessiva+1)==($linea)){
                //fwrite($write_file,"$value\n");
                print_r("$value\n");
                //print_r("$linea\n");
               
            }
            $linea++;
                
        }
                  //fclose($write_file);             
        ?>
    </body>
</html>
