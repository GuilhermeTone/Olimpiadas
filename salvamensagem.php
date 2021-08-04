<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$esporte = $_POST['esporte'];
$modalidade = $_POST['modalidade'];
$nacionalidade = $_POST['nacionalidade'];
$idade = $_POST['idade'];
$strcon = mysqli_connect('localhost','root','','olimpiadas') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO atletas VALUES ";
$sql .= "('$nome', '$sobrenome', '$email', '$esporte','$modalidade','$nacionalidade', $idade)"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";
?>