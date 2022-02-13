<?php
require_once(dirname(__FILE__,3).'/src/config/database.php');

class Student {

   public static function ResultAll(): void {

    $sql = 'SELECT matricula FROM db_avalia.aluno WHERE matricula IS NOT NULL';
    $result = Database::getResultFromQuery($sql);
    
    $i = 0;
    
    while($r = $result->fetch_assoc()){
    
        $i++;
    }

    

    echo "<h4 class='container'> O resultado é ". $i ." Alunos cadastrados.</h4>";

        
    }

    public static function resultAud(){

        $sql = "SELECT ativ.nome FROM db_avalia.turma as t
        INNER JOIN matricula as m ON (m.turma_idturma = t.idturma)
        INNER JOIN atividade as ativ ON (ativ.idatividade = t.atividade_idatividade)
        INNER JOIN aluno as alu ON ( alu.matricula = m.aluno_matricula)
        WHERE alu.nome = 'Aud'
        order by ativ.nome ASC";

        $result = Database::getResultFromQuery($sql);

        while($r = $result->fetch_assoc() ){


            echo "<h5  class='container ml-10'>Nome da ativade: ". $r['nome']. "</h5>";
        }

        
        

    }
}