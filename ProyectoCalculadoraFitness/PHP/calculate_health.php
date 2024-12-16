<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    
    // Validación de los datos recibidos
    if (isset($sex, $age, $height, $weight) && is_numeric($age) && is_numeric($height) && is_numeric($weight)) {
        // Cálculo del IMC
        $height_m = $height / 100;
        $imc = $weight / ($height_m * $height_m);
        
        // Cálculo del Metabolismo Basal según la ecuación de Harris-Benedict
        if ($sex == 'male') {
            $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);

        } else {
            $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
        }
        // Resultado en HTML
        echo "<div class='container mt-4'>";
        echo "<h2>Resultados</h2>";
        echo "<p>IMC: " . number_format($imc, 2) . "</p>";
        echo "<p>Metabolismo Basal: " . number_format($bmr, 2) . " calorías diarias</p>";
        echo "<a href='../index.php' class='btn btn-primary'>Volver</a>";
        echo "</div>";

    } else {
        echo "<div class='container mt-4'>";
        echo "<p>Por favor, complete todos los campos con valores válidos.</p>";
        echo "<a href='../index.php' class='btn btn-primary'>Volver</a>";
        echo "</div>";
    }

} else {
    echo "<div class='container mt-4'>";
    echo "<p>Método de solicitud no válido.</p>";
    echo "<a href='../index.php' class='btn btn-primary'>Volver</a>";
    echo "</div>";
}
?>
