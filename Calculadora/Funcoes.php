<?php

function Calcular($num1, $oper, $num2){
    switch ($oper) {
        case '+':
            $res = $num1 + $num2;
            PrintResposta($num1, $oper, $num2, $res);
            break;
        case '-':
            $res = $num1 - $num2;
            break;
        case '*':
            $res = $num1 * $num2;
            break;
        case '/':
            if($num2 != 0) {
                $res = $num1 / $num2;
            }
            else{
                echo 'Não é possível dividir por 0';
            }
            break;
        case '^':
            $res = 1;
            for($i = 0; $i < $num2; $i++){
                $res *= $num1;
            }
            PrintResposta($num1, $oper, $num2, $res);
            break;
        case '!':
            $res = 1;
            for($i = $num1; $i > 1; $i--){
                $res *= $i;
            }
            PrintResposta2($num1, $oper, $res);
            break;
        
        default:
            
            break;
    }
}

function PrintResposta($num1, $oper, $num2, $res){
    if($num2 != null){
        echo "<div class=\"Resposta\">
                    $num1 $oper $num2 = $res
            </div>";
    }
}

function PrintResposta2($num1, $oper, $res){
        echo "<div class=\"Resposta\">
                    $num1 $oper = $res
            </div>";
}