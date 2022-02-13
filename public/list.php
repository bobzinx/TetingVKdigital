<?php
require_once(dirname(__FILE__,2).'/src/students/student.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css" class="rel">
    <link rel="stylesheet" href="../css/bootstrap.min.css" class="rel">
    <title>lista de alunos</title>
</head>
<body>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/projeto/public/index.php">Inicio</a>
            </li>
        </ul>
    </div>  
    <h1 class="jumbotron container">
      Lista de alunos cadastrados no sistema
    </h1>
    
    <section class="container">
        <h3 class="lead">
        clique para saber o resultado de quantos  Alunos tem cadastrado!
        </h3>
        <form action="/projeto/public/list.php" method="post">
        <input type="hidden" name="value" id="value" value="true">
        <button type="submit" class="btn btn-primary">clique aqui</button>
        </form>
        
    </section>
    <p>
    <?php      
        if(isset($_POST["value"])){
            Student::ResultAll();
            }

    ?>
    </p>
</body>
</html>