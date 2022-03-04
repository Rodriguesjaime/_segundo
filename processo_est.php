<?php
include_once("ligacao.php");
$nomees=$_POST['tnome'];
$apelido=$_POST['apelido'];
$datan=$_POST['datan'];
$sexo=$_POST['sexo'];
$bi=$_POST['bi'];
$usuario=$_POST['usuario'];
$senha=$_POST['senhaest'];
$cade=$_POST['cadeira'];
$curso=$_POST['curso'];
$based = "insert into estudante (nome,apelido,dat_nasc,sexo,bi,usuario,senha,cadeira,curso) values
 ('$nomees','$apelido','$datan','$sexo','$bi','$usuario','$senha','$cade','$curso')";
$guardar = mysqli_query($ligarservid,$based);
$linha = mysqli_affected_rows($ligarservid);
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
<h1 id="reg">Registos</h1>
<hr><br><br>
<ul id="menu">
    <il id="lin" ><a href="cadeiras.php">CADEIRAS</a></il></br>
    <il id="lin"><a href="curso.php">CURSOS</a></il><br>
    <il id="lin"><a href="docente.php">DOCENTE</a></il></br>
    <il id="lin"><a href="estudante.php">ESTUDANTE</a></il>
    </ul>
</nav>

<section >
<h1 id="reg">Confirmcao de cadastro de  Estudante</h1>
<hr><br>
<a id="saida"href="index.php">sair</a>
    <p id="adm1">
<?php
session_start();
echo "Administrador:  ".  $_SESSION['nomeusuario']
?>  
   </p>
   <p id="mensag">
    <?php
    if($linha==1){
        echo"o cadastro foi realixado com sucesso!";
    }else{
        echo"Cadastro nao efetuado.<br/> por ja existe este BI";
    }
?>
    </p>
</section>
</div>
</body>
</html>