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
        $testo=file("./drugbank.txt");
        reset($testo);
        $linea=1;
        $rigasuccessiva=1;
       
        //$write_file = fopen("./out.txt","w+");
        while(list(,$value)= each($testo)) {
        
            $str=strpos($value,$par);
           
            if($str!=false){
               
                print_r("$value\n");
                //print_r("$linea\n");
                $rigasuccessiva=$linea;
                //fwrite($write_file,"$value\n");
                //file_put_contents($percorso, $value );
            }
    
            if(($rigasuccessiva+1)==($linea)){
                //fwrite($write_file,"$value\n");
                //print_r("$value\n");
                //print_r("$linea\n");
               
               
            }
            $linea++;
                
        }
                  fclose($write_file);   
        
        //FUNZIONE NON UTILIZZATA
        function readLine($file, $line_num, $delimiter="\n"){

            /***contatore ***/
            $i = 1;
            /*** apri il file da leggere ***/
            $fp = fopen( $file, 'r' );
            /*** cicla fino la fine del file ***/
            while ( !feof ( $fp) )
            {
                /*** leggi la riga ***/
                $buffer = stream_get_line( $fp, 1024, $delimiter );
                /*** se siamo nella giusta linea***/
                if( $i == $line_num )
                {
                    /*** ritorna la linea attuale del buffer ***/
                    return $buffer;
                }
                $i++;
                $buffer = '';
            }
            return false;
        }
        ?>
    </body>
</html>
