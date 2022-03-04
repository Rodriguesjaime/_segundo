<?php
include_once("ligacao.php");
session_start();
$not=$_POST['nota1'];
$nota=$_POST['nota2'];
$tra=$_POST['trabalho1'];
$tr=$_POST['trabalho2'];
$media_test=($not+$nota)/2+0.40;
$media_trab=($tr+$tra)/2+0.60;
$media_final=($media_test+$media_trab*2)/3;
$estudante=$_POST['nr'];
$cad=$_SESSION ['cadeira'];
$curso=$_SESSION['curso'];
$basedod = "insert into notas (nota1,nota2,trabalho1,trabalho2,media_notas,media_trabalhos,media_final,estudante,cadeira,curso) values 
('$not','$nota','$tra','$tr','$media_test','$media_trab','$media_final','$estudante','$cad','$curso')";
$mys = mysqli_query($ligarservid,$basedod);
$lin = mysqli_affected_rows($ligarservid);
mysqli_close($ligarservid);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_folha/sist3.css">
    <title>Sistemas de Gestao de Informacao</title>
</head>
<body>

    <div>
    <nav>
<h1 id="reg">Detalhes</h1>
<hr><br><br>
<ul id="menu">
<il id="lin"><a href="professor.php">chat</a></il><br>
<il id="lin" ><a href="nota2.php">lancar notas</a></il></br>
    <il id="lin"><a href="trabalhos2.php">Lancar trabalhos</a></il><br>
    </ul>
</nav> 
<section >
<h1 id="reg">Confirmcao de cadastro da cadeiras</h1>
<hr><br>
<a id="saida" href="index.php">sair</a>

   </p>
   <p id="mensag">
    <?php
    if($lin==1){
        echo"As notas foram lancadas com sucesso!";
    }else{
        echo"Cadastro nao efetuado.<br/> por ja existe este BI";
    }
?>
    </p>
</section>
</div>
</body>
</html>