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
    <title>atividades</title>
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
      Lista de atividades de alunos cadastrado

    </h1>
    
    <section class="container">
        <h3 class="lead">
        clique para saber os nomes das atividades nas quais o aluno "Aud" está  matriculado!
        </h3>
        <form action="/projeto/public/activity.php" method="post">
        <input type="hidden" name="value" id="value" value="true">
        <button type="submit" class="btn btn-primary">clique aqui</button>
        </form>
        
    </section>
    <section>
        <p class=".col-sm ml-1">
            <?php      
                if(isset($_POST["value"])){
                Student::resultAud();
                }
            ?>
        </p>
    
    </section>
    

   
    
</body>
</html>