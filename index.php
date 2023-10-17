<?php

    //Variáveeis
    $nome = "Jotta"; //String
    $idade = 18; //inteiro, int, integer
    $nota = 7.5; //float
    $ligado = true; //Boolean
    $grupo = array(1, 2, 3, 4, 5); //Vetor / Matriz

    //Imprimir letras e vars
    echo "Nome: $nome<br>Idade: $idade<br>Nota: $nota<br>
        Status Ligado: $ligado<br><br>
    ";
    for($i = 0; $i < 5; $i++){
        echo"Grupo $grupo[$i]<br>";
    }
?>