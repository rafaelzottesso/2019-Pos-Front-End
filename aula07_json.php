<?php

// Recebe o nome que está vindo com a URL
$nome = $_GET['nome'];

// Verifica se o nome é igual a Rafael
if($nome == "Rafael"){
    echo '
        {
            "nome": "Rafael Henrique Dalegrave Zottesso",
            "email": "rafael.zottesso@ifpr.edu.br",
            "telefone": "(44)99999-9999"
        }
    ';
} else {
    echo '
        { "erro": "Nenhum registro encontrado." }
    ';
}
    
?>