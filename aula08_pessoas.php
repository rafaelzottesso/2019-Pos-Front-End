<?php
// Recebendo os dados da posição "nome" da requisição
$nome = @$_GET['nome'];

// Recebeu dados? Não...
if($nome == ""){
  echo '
  {
    "pessoas" : [
        {
        "id"    : 1,
        "nome"  : "Rafael Henrique",
        "email" : "rafael@henrique.com",
        "fone"  : "(44) 4444-4444"
        },
        {
        "id"    : 2,
        "nome"  : "Fulano de Tal",
        "email" : "fulano@ifpr.edu.br",
        "fone"  : "(44) 9999-9876"
        },
        {
        "id"    : 3,
        "nome"  : "Ciclano da Silva Sauro",
        "email" : "ciclano@ifpr.edu.br",
        "fone"  : "(44) 9999-1234"
        },
        {
        "id"    : 4,
        "nome"  : "Beltrano Segundo",
        "email" : "fulano@ifpr.edu.br",
        "fone"  : "(44) 9999-4444"
        }
    ]

  }
  '; // fim do echo

} else {
  echo '
  {
    "pessoas" : [
      {
        "id"    : 1,
        "nome"  : "Rafael Henrique",
        "email" : "rafael@henrique.com",
        "fone"  : "(44) 4444-4444"
      }
    ]
  }
  ';
}
?>