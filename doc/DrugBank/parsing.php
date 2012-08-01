<?php

$drugId;$name;$description;$pharmacology;$toxicity;$categories;$atcCodes;
$drugInteractions;$property;$target_partner;$action;$Molecular_Formula;$target_position;   

    //Path file XML
    $xml_path = "a.xml";
    
    //Inizializza classe DOM
    $dom = new DOMDocument();
    
    //Non calcolare spazi vuoti nel documento
    $dom -> preserveWhiteSpace = false;
    
    //Carica il file XML
    @$dom -> load($xml_path)
        or die("File XML non valido!");

    //Cerca il nodo radice del codice XML
    $root = $dom -> documentElement;
    
    //Controllo se il nodo radice ha figli, in caso processo l'albero XML
    if($root -> hasChildNodes())
    {
        //Funzione per l'elaborazione dell'albero XML (Nodo ROOT, Livello 0)
        xmltree($root, 0);
    }
    
    //Funzione xmltree, come argomenti prevede il puntatore al nodo da esaminare ed il livello del nodo
    function xmltree($nodo, $p)
    {
        //Aumento livello, scendi di un nodo nell'albero
        $p++;

        //Visualizzazione grafica opzionale dei livelli ( - = 1° livello, -- = 2° livello, ecc...)
        $livello = str_repeat("  _  ", $p);

        //Ricava figli del nodo elaborato
        $figli = $nodo -> childNodes;

        //Processa ogni figlio del nodo
        foreach($figli as $figlio)
        {
            //Riconosce il primo livello del nodo e traccia una linea grafica di demarcazione (Opzionale)
            if($p == 1) echo "<hr>";

            //Visualizza il nome del nodo e rimuovi possibili codici superflui
            if(substr($figlio -> nodeName, 0, 1) != "#")
            {
                
                  //echo "<br><br>" . $livello . " NODO: " . $figlio -> nodeName;
                  $tag=$figlio->nodeName;
                if(strcmp($tag,"drugbank-id")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                 else if(strcmp($tag,"name")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                 else if(strcmp($tag,"description")==0){
                    //echo $tag."  : ";
                     hasChild($figlio,$p);
                 }
                 else if(strcmp($tag,"pharmacology")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                 else if(strcmp($tag,"toxicity")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                  else if(strcmp($tag,"categories")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                 else if(strcmp($tag,"atc-code")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                 else if(strcmp($tag,"drug-interactions")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                  else if(strcmp($tag,"property")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                  else if(strcmp($tag,"targets")==0){
                    //echo $tag." partner : ";
                    hasChild($figlio,$p);
                 }
                 else if(strcmp($tag,"actions")==0){
                    //echo $tag."  : ";
                    hasChild($figlio,$p);
                 }
                 
                 
            }

            //Controlla se il nodo ha degli attributi
            if($figlio -> hasAttributes())
            {
                $i=0;
                $tmp="";
                //Cerca attributi nel nodo
                $attributi = $figlio -> attributes;

                //Elabora attributi trovati
                foreach($attributi as $attributo)
                {
                    //echo " -- NOME ATTRIBUTO: " . $attributo -> name . " - VALORE ATTRIBUTO: " . $attributo -> value;
                    if (strcmp(($tag),"target")==0){
                        $i=$i+1;
                        $tmp=$attributo -> value;
                        if($i>1){
                        echo "target partner=".$tmp;    
                        //echo "target ".$attributo -> value . "<br>";
                        $i=0;
                        }
                        if ($i==1)echo "target position".$attributo -> value . "<br>";
                }
                 
                }
            }

            
            //Controllo se il nodo elaborato ha figli e ripete iterativamente la funzione su ogni nodo fino ad arrivare alle foglie dell'albero
           
           
                if($figlio -> hasChildNodes())
                {
                     $tag=$figlio->nodeName;
                    if (strcmp($tag,"drug")==0){
                                                           
                        xmltree($figlio, $p);
                    }
                     else if (strcmp($tag,"category")==0){
                                                           
                        xmltree($figlio, $p);
                    }
                     else if (strcmp($tag,"atc-code")==0){
                                                           
                        xmltree($figlio, $p);
                    }
                    else if (strcmp($tag,"drug-interaction")==0){
                        
                        echo "drug:";
                        xmltree($figlio, $p);
                    }
                    else if (strcmp($tag,"experimental-properties")==0){
                                                           
                        xmltree($figlio, $p);
                    }
                    else if (strcmp($tag,"kind")==0){
                        echo "kind: ";                                   
                        xmltree($figlio, $p);
                    }
                    else if (strcmp($tag,"value")==0){
                        echo "value: ";                                   
                        xmltree($figlio, $p);
                    }
                    else if (strcmp($tag,"source")==0){
                        echo "source: ";                                   
                        xmltree($figlio, $p);
                    } 
                    else if (strcmp(($tag),"target")==0){
                         //echo "DIOOOOOOOOO <BR><BR><BR><BR>" ;                             
                        xmltree($figlio, $p);
                    }
                    else if (strcmp(($tag),"action")==0){
                        echo "<br>action: " ;                              
                        xmltree($figlio, $p);
                    }
                    //else if (strcmp(($tag),"target position")==0){
                     //   echo "DIOOOOOOOOO <BR><BR><BR><BR>" ;                              
                      //  xmltree($figlio, $p);
                    //}
                                   
                }
                else
                {
                    //Visualizza il valore contenuto nel nodo
                    //echo " -- VALORE DEL NODO: " . $figlio -> nodeValue;
                    $tag2= $figlio->nodeValue;
                    
                    echo $tag2."<br>";
                }
            }
            
        
    }
    
    function hasChild($figlio,$p)
                {
        if($figlio -> hasChildNodes())
                {
                    xmltree($figlio, $p);
                }
                else
                {
                    //Visualizza il valore contenuto nel nodo
                    //echo " -- VALORE DEL NODO: " . $figlio -> nodeValue;
                    echo $figlio -> nodeValue."<br>";
                }
                 
    }
    
?>