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
<h1 id="reg"> Cadastro de estudante</h1>
<hr><br>

</p>
<form id="fomu1" method="post" action="processo_est.php" >
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
        Nome:<br><input type="text" name="tnome" id="cnome" size="30" maxlength="30" placeholder="nome complento"/><br>
        Apelido:<br><input type="text" name="apelido" id="cnome" size="30" maxlength="30" placeholder="Apelido"><br>
             
        Data de Nascimento:<br><input type="date" name="datan" id="cnome" size="30" maxlength="30" placeholder="Apelido"><br>
        BI<br><input type="text" name="bi" id="cnome" size="30" maxlength="15" placeholder="Digite 14 digitos e uma letra" default="0411001245785B"><br>
        Sexo <br/><input type="radio" name="sexo" id="tfem" value="F"/> <label for="f">F</label>
                <input type="radio" name="sexo" id="tmasc" value="M"><label for="m">M</label> <br>  
        Usuario <br><input type="text" name="usuario" id="cnome" size="30" maxlength="15" placeholder="introduz o nome do usuario"/><br>
         Senha<br><input type="password" name="senhaest" id="cnome" size="30" maxlength="10" placeholder="senha ou password"/><br>
                          
                <label for="cnome">cadeiras</label><br>
                <select name="cadeira" id="cCid">
                    <option>Matematica</option>
                   
</select><br>
                
        <label for="cnome">Cusos</label><br>
                <select name="curso" id="cCid">
                    <option>CONTABILIDADE</option>
                    <option>GESTAO DE RECURSOS HUMANOS</option>
                    <option>GESTAO HOSPITALAR</option>
                    <option>TECNOLOGIA DE INFORMACAO E COMUNICACAO </option>
</select>
</p>

</form>
</section>
<p id="ver">version 1.0</p>
</div>
</body>
</html>