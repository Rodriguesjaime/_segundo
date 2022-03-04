<?php
include_once("ligacao.php");
$pesquisa = isset ($_GET['procura'])?$_GET['procura']:"";
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
<body id="bod">
<p id="adm4">
<?php
session_start();
echo "Curso: ". $_SESSION['curso'],"<br/> Docente: ". $_SESSION['docente'], "<br/> Cadeira:  ".  $_SESSION['cadeira']

?> 
   
</p>
</p>
<?php

while($mostrarlist=mysqli_fetch_array($verf)){

        $nome=$mostrarlist[1];
        $sexo=$mostrarlist[4];
        $cadeira=$mostrarlist[8];
        $curso=$mostrarlist[9];

        echo"<article id='artigo'>";
        echo"Nome: $nome <br>";
        echo"Sexo: $sexo <br>";
        echo"Cadeira: $cadeira <br>";
        echo"Curso: $curso <br> <br>";


        echo"</article>";

}
mysqli_close($ligarservid);

?>
</p>
<p id="par">
    <label for="mens">  </label>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Enviar"id="botao">
</p>
</section>
</div>
</body>
</html>