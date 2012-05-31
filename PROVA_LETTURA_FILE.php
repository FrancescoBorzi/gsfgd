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
        $limiteRicerca=2000;
        $percorso="/home/fortunso/Scrivania/out.txt";
        //$write_file = fopen("./out.txt","w");
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
                print_r("$value\n");
                //print_r("$linea\n");
               
               
            }
            $linea++;
                
        }
                  //fclose($write_file);   
        
        //FUNZIONE NON UTILIZZATA
        function readLine($file, $line_num, $delimiter="\n")
{
    /*** set the counter to one ***/
    $i = 1;
 
    /*** open the file for reading ***/
    $fp = fopen( $file, 'r' );
 
    /*** loop over the file pointer ***/
    while ( !feof ( $fp) )
    {
        /*** read the line into a buffer ***/
        $buffer = stream_get_line( $fp, 1024, $delimiter );
        /*** if we are at the right line number ***/
        if( $i == $line_num )
        {
            /*** return the line that is currently in the buffer ***/
            return $buffer;
        }
        /*** increment the line counter ***/
        $i++;
        /*** clear the buffer ***/
        $buffer = '';
    }
    return false;
}
        ?>
    </body>
</html>
