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
        $palindromos = [];

        function detectorPalindromo($pCadena, &$palindromos) {
            if (strtolower($pCadena) == strtolower(strrev($pCadena))) {
                array_push($palindromos, $pCadena);
            }
        }

        // $stdin = fopen('php://stdin','r');
        // $entrada=rtrim(fgets($stdin),PHP_EOL);
        // Obtener subcadenas
        if (isset($_GET["frase"])) {
            $entrada = htmlspecialchars($_GET["frase"]);
            echo"<br>";
        } else {
            $entrada = htmlspecialchars("Arrozzorra");
        }
        for ($j = 0; $j < strlen($entrada); $j++) {
            for ($i = 1; $i <= (strlen($entrada) - $j); $i++) {
                detectorPalindromo(substr($entrada, $j, $i), $palindromos);
            }
        }
        // Elimina duplicados en el array
        $palindromos = array_unique($palindromos);
        // Ordena los elementos del array
        sort($palindromos);
        foreach ($palindromos as $i) {
            //esto hace que salga horizontal si estan los 2 activos se duplica echo $i . PHP_EOL;
            //echo $i . PHP_EOL;
            //esto hace que salga en vertical echo $i . "<br>";
            echo $i . "<br>";
        }
        ?>
        <!--para hacer un formulario input para entrada de datos y submit para enviar formulario al servidor-->
    <from action="http://localhost/PhpProjectDos/index.php">
        <input type="text" name="frase">
        <input type="Submit" value="Submit">
    </from>
    <!--para hacer una recarga de pag y entrada de otra parabra -->
    <a href="http://localhost/PhpProjectDos/index.php?frase=rosaasor">Recargar </a>
</body>
</html>
