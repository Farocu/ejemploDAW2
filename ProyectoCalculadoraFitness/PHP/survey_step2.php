<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos los datos del formulario
    $exercise_frequency = $_POST['exercise_frequency'];
    $exercise_duration = $_POST['exercise_duration'];
    $exercise_types = isset($_POST['exercise_type']) ? implode(', ', $_POST['exercise_type']) : 'Ninguno';
    $sports = isset($_POST['sports']) ? implode(', ', $_POST['sports']) : 'Ninguno';

    // Verificamos que los datos esenciales están presentes
    if (isset($exercise_frequency, $exercise_duration)) {
        // Ruta al archivo CSV
        $csv_file = '../csv/survey_results.csv';

        // Abrimos el archivo en modo escritura
        $file = fopen($csv_file, 'a');
        
        // Escribimos los datos en el archivo CSV
        fputcsv($file, [$exercise_frequency, $exercise_duration, $exercise_types, $sports]);
        
        // Cerramos el archivo
        fclose($file);
        
        // Mostramos un mensaje de éxito
        echo "<div class='container mt-4'>";
        echo "<h2>Encuesta Completada</h2>";
        echo "<p>Gracias por completar la encuesta.</p>";
        echo "<a href='../index.php' class='btn btn-primary'>Volver al inicio</a>";
        echo "</div>";
    } else {
        // Mostramos un mensaje de error si faltan datos
        echo "<div class='container mt-4'>";
        echo "<p>Por favor, complete todos los campos.</p>";
        echo "<a href='../index.php' class='btn btn-primary'>Volver</a>";
        echo "</div>";
    }
} else {
    // Mostramos un mensaje de error si el método de solicitud no es POST
    echo "<div class='container mt-4'>";
    echo "<p>Método de solicitud no válido.</p>";
    echo "<a href='../index.php' class='btn btn-primary'>Volver</a>";
    echo "</div>";
}
?>
