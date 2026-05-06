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
                <li><a href="?p=p10" class="<?php echo ($_GET['p'] == 'p10') ? 'active' : ''; ?>"><i class="fas fa-code"></i> Problema 10</a></li>
            </ul>
        </nav>

        <!-- Área de Contenido -->
        <main class="content">
            <?php
            $pagina = isset($_GET['p']) ? $_GET['p'] : 'inicio';

            if ($pagina == 'inicio') {
                echo '
                <header class="hero-section">
   <div class="content">
      <img src="https://fisc.utp.ac.pa/sites/fisc.utp.ac.pa/files/documentos/2020/imagen/logo_en_contactenos.png" alt="Logo UTP" class="logo">
      //  <h1>Universidad Tecnológica de Panamá</h1>
      <h3>Facultad de Ingeniería en Sistemas Computacionales</h3>
      <h4>Lic. Desarrollo y Gestión de Software</h4>
      <h4>Desarrollo de Software VII</h4>
      <hr>
      <p><strong>Estudiante:</strong> Jonathan Gonzalez, Andrade Victor, Chirú Kelvin, Magallón Amilcar</p>
      <p>Vergara Massiel, Barrios Dangelo, Morales Josue, Vallarino Jean</p>
      </div>
</header>';
            } 
            //PROBLEMA 1 ###################################################################################
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

            //PROBLEMA 10 ########################################################################################
            elseif ($pagina == 'p10') { 
                   echo '
                    <div class="card">
                    <h2>Problema 10: TABLA DEL 1 AL 50 [MULTIPLOS DE 2, 3 Y 5] </h2>
                    <p>Mostrar la tabla de multiplicar de un numero y que sean multiplos de 2, 3 y 5.</p>
                    
                    <form method="POST" class="form-style">
                        <input type="number" name="num" placeholder="Ingresa un número" required>
                        <button type="submit" name="calc_multiplo">Ejecutar Prueba</button>
                    </form>
                    '; //encabezado

                    if (isset($_POST['calc_multiplo'])) {
                    $numero = $_POST['num'];

                    echo '<div id="box_multiplo">';
                    echo "<h3 style='text-align:center; text-decoration:underline #ACFF54;'> Tabla de multiplicar de $numero (Multiplo 2, 3 y 5): </h3>";
                    echo '<ul id="list_multiplo">';

                for ($i = 1; $i <= 50; $i++){
                    $L = $numero * $i;
                     if ($L % 2 == 0){
                     if ($L % 3 == 0){
                     if ($L % 5 == 0){
                     echo "<li> <div> <p class = 'p_multiplo'> $numero x $i = $L <br> </p> </div> </li>";
                    }}}
                }
                echo '</ul>';
                echo '</div>';
            } //resultado
        }



            //Problema 2 ####################################################################################
            elseif ($pagina == 'p2') {
                echo '<div class="card">
                <h2>Matriz con resultados en diagonal</h2>
                <p>Este código muestra la suma de los números en diagonal, promedio y porcentaje que se ven dentro de la matriz</p>

                <table class="mi-tabla">
  <tr>
    <td>10</td>
    <td>20</td>
    <td>30</td>
  </tr>
  <tr>
    <td>15</td>
    <td>12</td>
    <td>14</td>
  </tr>
  <tr>
    <td>17</td>
    <td>18</td>
    <td>19</td>
  </tr>
</table>

                <form method="POST" class="form-style">
                        <button type="submit" name="calc_p2">Ejecutar Prueba</button>
                    </form>';
if (isset($_POST['calc_p2'])) {
                    $numeros = array (
      array(10, 20, 30),
      array(15, 12, 14),
      array(17, 18, 19)
    );

    $suma_diagonal = 0;
    $suma_total = 0;

    echo "<h3>Valores sumados (diagonal):</h3>";
    echo "<ul>";

    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 3; $col++) {
            
            $valor = $numeros[$row][$col];
            $suma_total += $valor; 

            if ($row == $col) {
                echo "<li><b>$valor</b></li>"; 
                $suma_diagonal += $valor;
            }
        }
    }
    echo "</ul>";

    // CL
    $promedio = $suma_diagonal / 3;
    $porcentaje = ($suma_diagonal / $suma_total) * 100;

    echo "<p>Suma de la diagonal: <b>$suma_diagonal</b></p>";
    echo "<p>Suma total de la matriz: <b>$suma_total</b></p>";
    echo "<p>Promedio de la diagonal: <b>" . round($promedio, 2) . "</b></p>";
    echo "<p>Porcentaje respecto al total: <b>" . round($porcentaje, 2) . "%</b></p>";

    // Preparar la tabla de prueba de escritorio
    echo "<p><h2>Esta es la prueba de escritorio</h2></p>";
    echo "<table>";
    echo "<thead>
            <tr>
                <th>Iteración</th>
                <th>Fila</th>
                <th>Columna</th>
                <th>Valor</th>
                <th>Suma Total Acum.</th>
                <th>¿Es Diagonal?</th>
                <th>Suma Diag. Acum.</th>
            </tr>
          </thead>";
    echo "<tbody>";

    $iteracion = 1;
    $suma_total1 = 0;
    $suma_diagonal1 = 0;

    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 3; $col++) {
            
            $valor = $numeros[$row][$col];
            $suma_total1 += $valor; 
            $es_diagonal = ($row == $col);
            
            if ($es_diagonal) {
                $suma_diagonal1 += $valor;
            }

            // Fila de la tabla para cada iteración
            $clase_diagonal = $es_diagonal ? "diagonal-row" : "";
            echo "<tr class='$clase_diagonal'>";
            echo "<td>$iteracion</td>";
            echo "<td>[$row]</td>";
            echo "<td>[$col]</td>";
            echo "<td>$valor</td>";
            echo "<td>$suma_total1</td>";
            echo "<td>" . ($es_diagonal ? "SÍ" : "NO") . "</td>";
            echo "<td>$suma_diagonal1</td>";
            echo "</tr>";
            
            $iteracion++;
        }
    }
    echo "</tbody></table>";
                echo '</div>';
            }
            }
            ?>
        </main>
    </div>

</body>
</html>

