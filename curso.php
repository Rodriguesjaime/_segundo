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

<section >
<h1 id="reg"> Cadastro de curso</h1>
<hr><br>

</p>
<form id="fomu1" method="post" action="processo_curs.php">
    <input type="submit" value="salvar" id="botao">
    <input type="reset" value="limpar" id="botao">
    <a id="saida" href="index.php">sair</a>
    <p id="adm1">
<?php
session_start();
echo "Administrador:  ".  $_SESSION['nomeusuario']
?>   
<br><br><br>
    <p id="parag">
        Nome:<br><input type="text" name="cnome" id="cnome" size="30" maxlength="50" placeholder="nome da cadeira"/><br>
        Descricao:<br><input type="text" name="descr" id="cnome" size="30" maxlength="30" placeholder="descricao"><br>
             
        Ano de lancamento:<br><input type="date" name="dlanc" id="cnome" size="30" maxlength="30" placeholder="Apelido"><br>
     
     
</p>
</form>
</section>
<p id="ver">version 1.0</p>
</div>
</body>
</html>