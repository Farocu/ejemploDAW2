<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $exercise_frequency = $_POST['exercise_frequency'];
    $exercise_duration = $_POST['exercise_duration'];
    
    if (isset($exercise_frequency, $exercise_duration)) {
        // Pasar datos a la siguiente página
        echo "<form action='survey_step2.php' method='post'>";
        echo "<input type='hidden' name='exercise_frequency' value='$exercise_frequency'>";
        echo "<input type='hidden' name='exercise_duration' value='$exercise_duration'>";
        echo "<div class='container mt-4'>";
        echo "<h2>Continúa la Encuesta</h2>";
        echo "<div class='mb-3'>";
        echo "<label class='form-label'>¿Qué tipo de ejercicios realizas?</label>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='exercise_type[]' id='aerobic' value='Aeróbico'>";
        echo "<label class='form-check-label' for='aerobic'>Aeróbico</label>";
        echo "</div>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='exercise_type[]' id='strength' value='Fuerza'>";
        echo "<label class='form-check-label' for='strength'>Fuerza</label>";
        echo "</div>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='exercise_type[]' id='flexibility' value='Flexibilidad'>";
        echo "<label class='form-check-label' for='flexibility'>Flexibilidad</label>";
        echo "</div>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='exercise_type[]' id='other' value='Otro'>";
        echo "<label class='form-check-label' for='other'>Otro</label>";
        echo "</div>";
        echo "</div>";
        echo "<div class='mb-3'>";
        echo "<label class='form-label'>¿Qué deportes practicas regularmente?</label>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='sports[]' id='football' value='Fútbol'>";
        echo "<label class='form-check-label' for='football'>Fútbol</label>";
        echo "</div>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='sports[]' id='basketball' value='Baloncesto'>";
        echo "<label class='form-check-label' for='basketball'>Baloncesto</label>";
        echo "</div>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='sports[]' id='tennis' value='Tenis'>";
        echo "<label class='form-check-label' for='tennis'>Tenis</label>";
        echo "</div>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='sports[]' id='swimming' value='Natación'>";
        echo "<label class='form-check-label' for='swimming'>Natación</label>";
        echo "</div>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='sports[]' id='cycling' value='Ciclismo'>";
        echo "<label class='form-check-label' for='cycling'>Ciclismo</label>";
        echo "</div>";
        echo "<div class='form-check'>";
        echo "<input class='form-check-input' type='checkbox' name='sports[]' id='other_sport' value='Otro'>";
        echo "<label class='form-check-label' for='other_sport'>Otro</label>";
        echo "</div>";
        echo "</div>";
        echo "<button type='submit' class='btn btn-primary'>Enviar</button>";
        echo "</div>";
        echo "</form>";
    } else {
        echo "<div class='container mt-4'>";
        echo "<p>Por favor, complete todos los campos.</p>";
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
