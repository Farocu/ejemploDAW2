<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de Salud y Encuesta de Actividad Física</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HealthApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#calculator">Calculadora de Salud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#survey">Encuesta de Actividad Física</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#report">Informe de Actividad Física</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="container mt-4">
        <div id="home" class="tab-content">
            <h1>Bienvenido a HealthApp</h1>
            <p>Utiliza las pestañas de navegación para acceder a las diferentes secciones de la aplicación.</p>
        </div>
        <div id="calculator" class="tab-content" style="display: none;">
            <h2>Calculadora de Salud</h2>
            <form action="php/calculate_health.php" method="post" class="mt-3">
                <div class="mb-3">
                    <label for="sex" class="form-label">Sexo</label>
                    <select name="sex" id="sex" class="form-select" required>
                        <option value="male">Hombre</option>
                        <option value="female">Mujer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Edad</label>
                    <input type="number" name="age" id="age" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="height" class="form-label">Altura (cm)</label>
                    <input type="number" name="height" id="height" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">Peso (kg)</label>
                    <input type="number" name="weight" id="weight" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>
            </form>
        </div>


        <div id="survey" class="tab-content" style="display: none;">
            <h2>Encuesta de Actividad Física</h2>
            <form action="php/survey_step1.php" method="post" class="mt-3">
                <div class="mb-3">
                    <label class="form-label">¿Con qué frecuencia haces ejercicio?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exercise_frequency" id="daily" value="Diario" required>
                        <label class="form-check-label" for="daily">Diario</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exercise_frequency" id="weekly" value="Semanal" required>
                        <label class="form-check-label" for="weekly">Semanal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exercise_frequency" id="monthly" value="Mensual" required>
                        <label class="form-check-label" for="monthly">Mensual</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exercise_frequency" id="never" value="Nunca" required>
                        <label class="form-check-label" for="never">Nunca</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">¿Cuánto tiempo dedicas al ejercicio en cada sesión?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exercise_duration" id="less30" value="Menos de 30 minutos" required>
                        <label class="form-check-label" for="less30">Menos de 30 minutos</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exercise_duration" id="30to60" value="30-60 minutos" required>
                        <label class="form-check-label" for="30to60">30-60 minutos</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exercise_duration" id="1to2" value="1-2 horas" required>
                        <label class="form-check-label" for="1to2">1-2 horas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exercise_duration" id="more2" value="Más de 2 horas" required>
                        <label class="form-check-label" for="more2">Más de 2 horas</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Siguiente</button>
            </form>
        </div>
        <div id="report" class="tab-content" style="display: none;">
            <h2>Informe de Actividad Física</h2>
            <form action="php/generate_report.php" method="post">
                <button type="submit" class="btn btn-primary">Generar Informe</button>
            </form>
        </div>
    </div>



    <!-- Footer --> 
    <footer class="bg-light text-center text-lg-start mt-4"> 
        <div class="container p-4"> 
            <p class="text-muted">&copy; FranDev 2024. Todos los derechos reservados. Página web actualizada al año 2024.</p> 
        </div> 
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.tab-content').forEach(tab => tab.style.display = 'none');
                const target = this.getAttribute('href').substring(1);
                document.getElementById(target).style.display = 'block';
            });
        });
    </script>

</body>
</html>

