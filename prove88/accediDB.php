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
        function connetti(){
                mysql_connect('localhost', 'root', '')
                or die("cannot connect to database\n");

                echo mysql_get_server_info() . "\n";
                echo phpversion() . "\n";
                echo "sei connesso ";
        }
        ?>
    </body>
</html>
