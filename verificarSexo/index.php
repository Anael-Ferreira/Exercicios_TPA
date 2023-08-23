<?php
$Sexo = '';
$Result = '';

if(isset($_POST['verificar']))
{
    $Sexo = strtoupper($_POST['sexo']);
    if($Sexo == 'M')
        $Result = 'Masculino';
    else if($Sexo == 'F')   
        $Result = 'Feminino';
    else 
        $Result = 'Invalido'; 
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
<p>Digite seu sexo:</p>
<input type="text" name="sexo" placeholder="sexo"  required>
<input type="submit" name="verificar" id="" >
<p>Resultado:  <?= $Result ?> </p>
</form>
</body>
</html>