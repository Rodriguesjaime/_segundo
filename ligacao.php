<?php
    
    $host = "localhost";
    $usenome = "root";
    $senhab = "";
    $nomebd = "escola";
    $ligarservid = mysqli_connect($host,$usenome,$senhab,$nomebd);
 
    if (!$ligarservid){
        echo ("Erro! na ligacao de base de dado" . mysqli_connect_erro());
    }else{
    
    }
    

?>
