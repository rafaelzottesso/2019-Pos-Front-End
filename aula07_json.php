<?php

// Recebe o nome que está vindo com a URL
$nome = $_GET['nome'];

// Verifica se o nome é igual a Rafael
if($nome == "Rafael"){
    echo "Usuário encontrado!";
} else {
    echo "Nenhum registro encontrado";
}
    
?>