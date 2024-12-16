<?php
function leerCSV($archivo) {
    $datos = [];
    if (($gestor = fopen($archivo, 'r')) !== FALSE) {
        while (($fila = fgetcsv($gestor)) !== FALSE) {
            $datos[] = $fila;
        }
        fclose($gestor);
    }
    return $datos;
}

function calcularEstadisticas($datos) {
    $estadisticas = [
        'frecuencia' => [],
        'duracion' => [],
        'tipo_ejercicio' => [],
        'deportes' => []
    ];
    
    foreach ($datos as $fila) {
        list($frecuencia, $duracion, $tipo_ejercicio, $deportes) = $fila;
        
        // Contar frecuencia
        if (!isset($estadisticas['frecuencia'][$frecuencia])) {
            $estadisticas['frecuencia'][$frecuencia] = 0;
        }
        $estadisticas['frecuencia'][$frecuencia]++;
        
        // Contar duración
        if (!isset($estadisticas['duracion'][$duracion])) {
            $estadisticas['duracion'][$duracion] = 0;
        }
        $estadisticas['duracion'][$duracion]++;
        
        // Contar tipos de ejercicio
        $tipos = explode(', ', $tipo_ejercicio);
        foreach ($tipos as $tipo) {
            if (!isset($estadisticas['tipo_ejercicio'][$tipo])) {
                $estadisticas['tipo_ejercicio'][$tipo] = 0;
            }
            $estadisticas['tipo_ejercicio'][$tipo]++;
        }




        // Contar deportes
        $deportes_array = explode(', ', $deportes);
        foreach ($deportes_array as $deporte) {
            if (!isset($estadisticas['deportes'][$deporte])) {
                $estadisticas['deportes'][$deporte] = 0;
            }
            $estadisticas['deportes'][$deporte]++;
        }
    }
    
    return $estadisticas;
}

// Leer datos del CSV
$datos = leerCSV('../csv/survey_results.csv');

// Calcular estadísticas
$estadisticas = calcularEstadisticas($datos);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informe de Actividad Física</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-4">

        <h2>Informe de Actividad Física</h2>

        <h3>Frecuencia del Ejercicio</h3>

        <ul>
            <?php foreach ($estadisticas['frecuencia'] as $frecuencia => $count): ?>
                <li><?php echo "$frecuencia: $count"; ?></li>
            <?php endforeach; ?>
        </ul>


        



        <h3>Duración del Ejercicio</h3>
        <ul>
            <?php foreach ($estadisticas['duracion'] as $duracion => $count): ?>
                <li><?php echo "$duracion: $count"; ?></li>
            <?php endforeach; ?>
        </ul>
        
        <h3>Tipos de Ejercicio</h3>
        <ul>
            <?php foreach ($estadisticas['tipo_ejercicio'] as $tipo => $count): ?>
                <li><?php echo "$tipo: $count"; ?></li>
            <?php endforeach; ?>
        </ul>
        
        <h3>Deportes Practicados</h3>
        <ul>
            <?php foreach ($estadisticas['deportes'] as $deporte => $count): ?>
                <li><?php echo "$deporte: $count"; ?></li>
            <?php endforeach; ?>
        </ul>
        
        <a href="../index.php" class="btn btn-primary">Volver al inicio</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>

