<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP - UTP</title>
    <link rel="stylesheet" href="estilo1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="container">
        <!-- Menú Lateral -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <i class="fab fa-php logo-icon"></i>
                <h2>PHP Proyecto</h2>
            </div>
            <ul>
                <li><a href="?p=inicio" class="<?php echo (!isset($_GET['p']) || $_GET['p'] == 'inicio') ? 'active' : ''; ?>"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="?p=p1" class="<?php echo ($_GET['p'] == 'p1') ? 'active' : ''; ?>"><i class="fas fa-code"></i> Problema 1</a></li>
                <li><a href="?p=p2" class="<?php echo ($_GET['p'] == 'p2') ? 'active' : ''; ?>"><i class="fas fa-terminal"></i> Problema 2</a></li>
            </ul>
        </nav>

        <!-- Área de Contenido -->
        <main class="content">
            <?php
            $pagina = isset($_GET['p']) ? $_GET['p'] : 'inicio';

            if ($pagina == 'inicio') {
                echo '
                <div class="card presentation">
                    <img src="https://proyectos.utp.ac.pa/recursos/img/logo_utp.png" alt="Logo UTP" class="utp-logo">
                    <h1>Universidad Tecnológica de Panamá</h1>
                    <h3>Facultad de Ingeniería de Sistemas Computacionales</h3>
                    <hr>
                    <p><strong>Estudiante:</strong> Jonathan Gonzalez</p>
                    <p><strong>Asignatura:</strong> Desarrollo de Software VII</p>
                    <p><strong>Proyecto:</strong> Estructuras de Control en PHP</p>
                </div>';
            } 
            
            elseif ($pagina == 'p1') {
                echo '
                <div class="card">
                    <h2>Problema 1: Cálculo de Factorial</h2>
                    <p>Calcula el factorial de un número e imprime la lógica procesada.</p>
                    
                    <form method="POST" class="form-style">
                        <input type="number" name="num" placeholder="Ingresa un número" required>
                        <button type="submit" name="calc_p1">Ejecutar Prueba</button>
                    </form>';

                if (isset($_POST['calc_p1'])) {
                    $n = $_POST['num'];
                    $f = 1;
                    echo "<div class='result'><h3>Prueba de Escritorio:</h3><table class='debug-table'><tr><th>Iteración</th><th>Valor N</th><th>Factorial Acum.</th></tr>";
                    for ($i = 1; $i <= $n; $i++) {
                        $f *= $i;
                        echo "<tr><td>$i</td><td>$i</td><td>$f</td></tr>";
                    }
                    echo "</table><p class='final-res'>Resultado Final: <strong>$f</strong></p></div>";
                }
                echo '</div>';
            } 
            
            else {
                echo '<div class="card"><h2>Sección en Construcción</h2><p>Contenido para el Problema 2 aquí.</p></div>';
            }
            ?>
        </main>
    </div>

</body>
</html>

