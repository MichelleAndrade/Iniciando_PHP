<?php
    include './lib/listar.php';

    $alunos = ListaAlunos();
    $aluno = $alunos[4];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <a href = "/">HOME</a> 
         <a href = "/ListaAlunos.php">Alunos</a> 

    </header>
     <main>
         Olá 
         <?php

             echo '<p>'. $aluno. '</p>'
         ?>
            
     </main>
    
</body>
</html>