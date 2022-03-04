<?php
include_once("ligacao.php");
$pesquisa = isset ($_GET['freme'])?$_GET['freme']:"";
$sqmy="select*from estudante where nome like '%$pesquisa%'";
$verf=mysqli_query($ligarservid,$sqmy);
$listas=mysqli_num_rows($verf);


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
<hr><br>

<ul id="menu">
    <il id="lin" ><a href="cadeiras.php">CADEIRAS</a></il></br>
    <il id="lin"><a href="curso.php">CURSOS</a></il><br>
    <il id="lin"><a href="docente.php">DOCENTE</a></il></br>
    <il id="lin"><a href="estudante.php">ESTUDANTE</a></il> 
    <il id="lin"><a href="lista.php">LISTA DE ESTUDANTE</a></il>
    <il id="lin"><a href="alteracadd.php">ALTERACAO DOS DADOS</a></il>
    </ul>
    
</nav>
 
<section  >
<h1 id="reg"> LISTA DE ESTUDANTE</h1>

<hr><br>

<iframe src="cadeirasdd.php" name="freme" id="ifram"></iframe>

</section>
<a id="saidaifr" href="index.php">sair</a>
<p id="ver">version 1.0</p>
</div>
</body>
</html>