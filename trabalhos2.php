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
<h1 id="reg"> Bem-vindo a sistema </h1>
<hr><br>

</p>
<form id="fomu1" method="post" action="processo.php">
    <input type="submit" value="salvar" id="botao">
    <input type="reset" value="limpar" id="botao">
    <a id="saida" href="index.php">sair</a>
    <p id="adm11">
    <?php
session_start();
echo "Curso: ". $_SESSION['curso'],"<br/> Docente: ". $_SESSION['docente'], "<br/> Cadeira:  ".  $_SESSION['cadeira']

?>
    <br><br><br>
   
    <p id="parag">
</p>
</form>

</section>
<p id="ver">version 1.0</p>
</div>
</body>
</html>