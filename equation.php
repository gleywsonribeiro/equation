
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $delta = pow($b, 2) - 4 * $a * $c;

        if ($delta < 0) {
            $resultado = "Não existe raiz real";
        } elseif ($delta == 0) {
            $x = -$b / 2 * $a;
            $resultado = "Raízes reais e iguais: $x";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            $resultado = "Raízes reais e diferentes: $x1 e $x2";
        }
        echo $resultado;
        ?>
        <br>
        <a href="index.php">voltar</a>
    </body>
</html>
