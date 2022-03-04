<?php
session_start();
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
    <form id="ppp" method="POST" action="validade.php">
        <fieldset>
    <h1 id="cabecalho"> Login</h1>
  <p>Usuario  <input type="text" name="nome" maxlenght ="20" placeholder="Usuario" require autofocus id="cabecalho2"></br></br>
    Senha   <input type ="password" name ="senha" maxlenght="20" placeholder="Senha ou password" id="cabecalha2"></br></br>
    <button type="submit" >Entrar</button> &nbsp
   
    </p>
<p id="roda"> se esqueceu sua senha entre em contacto connosco </p>
<p id="roda2"><a href="esquecemento.php" >clik aqui para acessar a tua conta</a></p>
    
    <footer id="dat">10/02/2021</footer>
    <p id="msm">
    <?php
    if  (isset ($_SESSION['entrar'])){

        echo  $_SESSION['entrar'];
        unset ($_SESSION['entrar']);
    }?>
    </p> 
</fieldset>
    
</form>
</body>
</html>