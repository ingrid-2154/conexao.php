<?php
include_once ('conexao.php');
$nome = $_POST['nome'];
$email = $POST['email];
$estado = $POST ['estado'];
$select = $_POST['select'];

$result_msg_contato = "INSERT INTO mensagens_contatos(Nome, Email, Cidade, alternativa, created) VALUES ('$nome','$email','$estado,'$selecione', '$NOW())";
$resultado_msg_contato = mysqli_query($conn, $msg_contato)
?>