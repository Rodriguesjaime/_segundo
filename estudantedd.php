<?php
include_once("ligacao.php");
$pesquisa = isset ($_GET['procura'])?$_GET['procura']:"";
$sqmy="select*from estudante where nome like '%$pesquisa%'";
$verf=mysqli_query($ligarservid,$sqmy);
$listas=mysqli_num_rows($verf);

$actua=isset($_GET['actual'])?$_GET['actual']:"";
$id=isset($_GET['id'])?$_GET['id']:"";
$cadeiractual="update estudante set nome= '$actua' where id='$id'";
$alterad=mysqli_query($ligarservid,$cadeiractual);


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
echo "Administrador:  ".  $_SESSION['nomeusuario']
?>

</p><p id="menu2">
<ul id="menualter">
    <il id="linalter" ><a href="cadeirasdd.php">CADEIRAS</a></il>
    <il id="linalter"><a href="cursodd.php">CURSOS</a></il>
    <il id="linalter"><a href="docentedd.php">DOCENTE</a></il>
    <il id="linalter"><a href="estudantedd.php">ESTUDANTE</a></il> 
</ul>

</p>
<form method ="get" action="" id="pesqestu">
    Alterar nome <br><input type="text" name="actual" class="pesqcad" required autofocus><br/>
    A posicao <br><input type="text" name="id" class="pesqcad" >

    <input type="submit" value="Alterar" id="botao">
</form>
<form method ="get" action="" id="pesq1">
    Pesquisa de estudante <br><input type="text" name="procura" class="pesq" required autofocus>
    <input type="submit" value="pesquisar" id="botao">
</form>

<p id="art">
<?php
echo"<p id='menualter2'>";
echo"$listas Foi encontrado ";
echo"<br/>";
echo"Listas das cadeiras escritos";
echo"<br/><br/><br/><br/>";
echo"</p>";

while($mostrarlist=mysqli_fetch_array($verf)){
    $ide=$mostrarlist[0];
    $nome=$mostrarlist[1];
    $sexo=$mostrarlist[4];
    $cadeira=$mostrarlist[8];
    $curso=$mostrarlist[9];

    echo"<article id='artigo'>";
    echo"Posicao: $ide <br>";
    echo"Nome: $nome <br>";
    echo"Sexo: $sexo <br>";
    echo"Cadeira: $cadeira <br>";
    echo"Curso: $curso <br> <br>";


    echo"</article>";

}
mysqli_close($ligarservid);

?>
</p>
</p>

</section>
</div>
</body>
</html>