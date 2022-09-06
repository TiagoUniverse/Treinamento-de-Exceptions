<?php


function mensagem1()
{
    echo "Função 1 está antes da exceção" . "<br>";
}


function mensagem2($int)
{
    if(!is_int($int))
    {
        throw new Exception("O argumento não é do tipo esperado");
    } else
    {
        echo "Mensagem 2 está na exceção" . "<br>";
    }

    mensagem3();
}

function mensagem3()
{
    echo "Mensagem 3 está depois da exceção";
}


mensagem1();
mensagem2(5.5);