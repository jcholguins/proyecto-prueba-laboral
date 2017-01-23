<?php 

    $i=0; 
    $x=rand(0,10); 
            
    while($i<10)
    { 
        echo "<br>".$x." x ".$i." = ".$x*$i;
        $i++; 
    }

    $a=1;
    if($a) 
    {
    echo “Verdadero”;
    } 
    
    else 
    {
    echo “Falso”;
    }
?>