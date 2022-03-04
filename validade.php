<?php
session_start();
include_once("ligacao.php");
if((isset($_POST['nome'])) && (isset($_POST['senha']))){
    $utilizador = mysqli_real_escape_string ($ligarservid, $_POST['nome']);
    $senha =mysqli_real_escape_string ($ligarservid, $_POST['senha']);
    $passw = md5($senha);
    $base ="SELECT * FROM estudante where usuario='$utilizador' AND senha = '$senha' LIMIT 1 ";
    $dados="SELECT * FROM docente where usuario='$utilizador' AND senha = '$senha' LIMIT 1 ";
    $adm="SELECT * FROM usuario where nome='$utilizador' AND senha = '$senha' LIMIT 1 ";
   
    $result= mysqli_query($ligarservid,$base);
    $result2= mysqli_query($ligarservid,$dados);
    $result3= mysqli_query($ligarservid,$adm);
    $resultado = mysqli_fetch_assoc($result);
    $resultado3 = mysqli_fetch_assoc($result3);
    $administ = mysqli_fetch_assoc($result2);
if($resultado3){
       
       $_SESSION['nomeusuario'] =$resultado3['nome_completo'];
        header ("location: cadeiras.php");
    }elseif($resultado){
        $_SESSION['utelnomee'] =$resultado['nome'];
        header ("location: segunda.php");
    }elseif(isset($administ)){
            
            $_SESSION['docente'] =$administ['nome'];
            $_SESSION['cadeira']=$administ['cadeira'];
            $_SESSION['curso']=$administ['cursos'];
            header ("location: professor.php");
            
    }else{
        $_SESSION ['entrar'] = "Usuario ou senha invalido";
    header ("location: primeira.php");   
    }
}else{
    $_SESSION ['entrar'] = "Usuario ou senha invalido";
    header ("location: primeira.php");
}


?>


