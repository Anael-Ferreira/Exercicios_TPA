<?php
$N1 = 0 ;
$N3 = 0;
$Resultado = 0;

if(isset($_POST['calcular']))
{  
    $N1 = (int)$_POST['N1'];
    $N2 = (int)$_POST['N2'];
    $N3 = (int)$_POST['N3'];

    if($N1 > $N2 && $N1 > $N3)
        $Resultado = $N1;
    else if($N2 > $N1 && $N2 > $N3)
        $Resultado = $N2;
    else if($N3 > $N1 && $N3 > $N2)
        $Resultado = $N3;
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
    <p>Digite 3 números nos campos abaixo:</p>
    <input type="number" name="N1" value= <?= $N1 ?> required > <br>
    <input type="number" name="N2" value= <?= $N2 ?> required > <br>
    <input type="number" name="N3" value= <?= $N3 ?> required > <br>
    <input type="submit" name="calcular" id="" value="MaiorNumero">
    <p>Resultado:  <?= $Resultado ?> </p>
</body>
</html>