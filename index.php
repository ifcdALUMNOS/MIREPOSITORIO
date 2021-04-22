<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablas de multiplicar</title>
    </head>
    <body>
        <?php
        function fFormulario($sMensaje) {
            echo '<h3>' . $sMensaje . '</h3>';
            echo '<form method="post" action="http://localhost/PhpMultiplicar3/index.php">
            <input type = "text" name = "numero">
            <input type = "submit" value = "Enviar">
        </form>';
        }
            if (!isset($_POST['numero']) or!is_numeric($_POST['numero'])) {
                fFormulario("¡Introduzca un numero!");
            } else {
                $iNumero = $_POST['numero'];
                echo "<h1>Tabla del $iNumero:</h1>";
                for ($iContador = 0; $iContador <= 10; $iContador++) {
                    echo "$iContador * $iNumero = " . $iContador * $iNumero . "<br/>";
                }
                fFormulario("Introduzca un numero nuevo");
            }
            ?>
    </body>
</html>