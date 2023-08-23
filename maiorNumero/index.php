<?php
$N1 = 0 ;
$N2 = 0;
$Resultado = 0;

if(isset($_POST['calcular']))
{  
    $N1 = (int)$_POST['N1'];
    $N2 = (int)$_POST['N2'];

    if($N1 > $N2)
        $Resultado = $N1;
    else if($N2 > $N1)
        $Resultado = $N2;
    else
        $Resultado = 'Valores iguais';
}header("Content-type: text/html; charset=utf-8");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
</head>
<body>
    <form method="post">
    <p>Digite 2 números nos campos abaixo:</p>
    <input type="number" name="N1" value= <?= $N1 ?> required > <br>
    <input type="number" name="N2" value= <?= $N2 ?> required > <br>
    <input type="submit" name="calcular" id="" value="MaiorNumero">
    <p>Resultado:  <?= $Resultado ?> </p>
</body>
</html>