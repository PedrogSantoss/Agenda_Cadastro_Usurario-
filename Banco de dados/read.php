<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_clientes");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];
    $grupo = $registros['grupo'];

    echo "<tr>";
    echo "<td>$nome</td><td>$email</td><td>$telefone</td><td>$grupo</td>";
    echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
    echo "<a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "<tr>";
endwhile;