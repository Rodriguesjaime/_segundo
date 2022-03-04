
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
<il id="lin"><a href="segunda.php">chat</a></il><br>
<il id="lin" ><a href="nota.php">ver notas</a></il></br>
    <il id="lin"><a href="trabalhos.php">trabalhos</a></il><br>
    </ul>
</nav>

<section >
<h1 id="reg"> Bem-vindo a sistema </h1>
<hr><br>
<p id="admi">
<?php
session_start();
echo "Usuario:  ".  $_SESSION['utelnomee']
?>

</p>

<a id="saida" href="index.php">sair</a>

</section>
<p id="ver">version 1.0</p>
</div>
</body>
</html>