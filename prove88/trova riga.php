<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          
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
