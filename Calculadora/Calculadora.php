<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
   
    <div class="calculadora">         
        <h1>Calculadora</h1>  

        <form method="get" action="">   
            <!-- 1° Número -->
            <input type="text" name="num1" placeholder="Primeiro numero" required>  
            <!-- Operador -->
            <select name="oper" required>                 
                <option value="+">+</option>                 
                <option value="-">-</option>                 
                <option value="*">*</option>                 
                <option value="/">/</option>                 
                <option value="^">^</option>                 
                <option value="!">!</option>             
            </select> 
            <!-- 2° Número -->
            <input type="text" name="num2" placeholder="Segundo numero">             
            <br>             
            <input class="calcula" type="submit" value="Calcular">                      
        </form>
    </div>

    <?php

    include 'Funcoes.php';
    
    $num1 = intval($_GET['num1']);
    $oper = $_GET['oper'];
    $num2 = intval($_GET['num2']);

    Calcular($num1, $oper, $num2);

    ?>
</body>
</html>