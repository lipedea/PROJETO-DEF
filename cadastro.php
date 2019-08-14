<?php
    
    $data = $_POST['data'];
    $curso = $_POST['curso'];
    $nome = $_POST['nome'];
    
    list($ano, $mes, $dia) = explode('-', $data);

    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
   
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

    
    if($idade<=17){
        echo "Menores de 18 anos não podem participar dos cursos ofertados.";
    }
        else{
            echo "Parabéns, $nome! Você acaba de inscrever-se no curso de $curso.";
        }


?>