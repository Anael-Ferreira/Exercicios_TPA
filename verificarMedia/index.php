<?php
$Nota1 = 0;
$Nota2 = 0;
$Result = 0;
$StatusAluno = '';

if(isset($_POST['calcular']))
{
    $Nota1 = $_POST['nota1'];
    $Nota2 = $_POST['nota2'];
    $Result = ($Nota1 + $Nota2) / 2;

    if($Result >= 7)
        $StatusAluno = "Aprovado";
    else if($Result <= 7)
        $StatusAluno = 'Reprovado';
    else if($Result == 10)
        $StatusAluno = 'Aprovado com distinção';
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
<p>Digite 2 notas:</p>
<input type="number" name="nota1"  required><br>
<input type="number" name="nota2"  required><br>
<input type="submit" name="calcular" id="" >

<p>Resultado:  <?= $StatusAluno ?> </p>
</form>
</body>
</html>