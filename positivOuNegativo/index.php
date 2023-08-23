<?php

$Num = 0;
$Result = '';
if(isset($_POST["calcular"]))
{
    $Num = (int)$_POST['numero'];

    if($Num > 0)
    {
        $Result = 'Positivo';
    }
    else if($Num < 0)
    {
        $Result = 'Negativo';
    }
    else
    {
        $Result = "zero";
    }
    
}
header("Content-type: text/html; charset=utf-8");
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
</head>
<body>
<form method="post">
<p>Digite um numero para descobrir se ele é positivo ou negativo</p>
<input type="number" name="numero" value= <?= $Num ?> required>
<input type="submit" name="calcular" id="" >
<p>Resultado:  <?= $Result ?> </p>
</form>
</body>
</html>