<?php
function Pu($modele,$diametre){
    if($modele=="ballon")
        if($diametre==18)
        $a=1.90;
        else
        $a=4.50;
        

    elseif($modele=="Nature")
        if($diametre==18)
        $a=5.9;
        else
        $a =8.5;
        
    else{
        if($diametre==18)
        $a=9.9;
        else
        $a=12.5;
    }
}
echo pu("ballon",26)


    


?>