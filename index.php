<?php

require_once("somar.php");

function Dados(){
    $resultadoSoma = Soma(10,10);
    $resultadoSubtracao = Subtracao(10,10);
    $resultadoMultiplicacao = Multiplicacao(10,10);
    $resultadoDivisao = Divisao(10,10);

    echo $resultadoSoma;
    echo "</br>";
    echo $resultadoSubtracao;
    echo "</br>";
    echo $resultadoMultiplicacao;
    echo "</br>";
    echo $resultadoDivisao;
}
Dados();