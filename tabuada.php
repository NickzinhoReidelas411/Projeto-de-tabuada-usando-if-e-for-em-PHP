<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    echo "<h1>Resultado da Tabuada</h1>";

    if ($numero > 0) {
        echo "<h2>Tabuada do número $numero</h2>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<p>$numero x $i = $resultado</p>";
        }
    } else {
        echo "<p style='color:red;'>Por favor, insira um número positivo!</p>";
    }
} else {
    echo "<p>Use o formulário para enviar um número.</p>";
}
?>
