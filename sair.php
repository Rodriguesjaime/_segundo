<?php
session_start();
unset(

    $_SESSION['utelnomee'],
    $_SESSION['nomeusuario'],
    $_SESSION['docente'],
    $_SESSION['cadeira'],
    $_SESSION['curso']
   
);
    header("location: publicidade.php");


?>