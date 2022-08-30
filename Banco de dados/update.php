<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email', FILTER_VALIDADE_EMAIL);
$telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_NUMBER_INT);
$grupo = filter_input(INPUT_POST,'grupo', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_clientes set nome='$nome', email='$emil', telefone='$telefone', grupo='$grupo' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("Location:../consultas.php");
    
endif;