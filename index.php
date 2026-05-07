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
                <li><a href="?p=p3" class="<?php echo ($_GET['p'] == 'p3') ? 'active' : ''; ?>"><i class="fas fa-code"></i> Problema 3</a></li>
                <li><a href="?p=p4" class="<?php echo ($_GET['p'] == 'p4') ? 'active' : ''; ?>"><i class="fas fa-code"></i> Problema 4</a></li>
                <li><a href="?p=p5" class="<?php echo ($_GET['p'] == 'p5') ? 'active' : ''; ?>"><i class="fas fa-code"></i> Problema 5</a></li>
                <li><a href="?p=p6" class="<?php echo ($_GET['p'] == 'p6') ? 'active' : ''; ?>"><i class="fas fa-code"></i> Problema 6</a></li>
                <li><a href="?p=p7" class="<?php echo ($_GET['p'] == 'p7') ? 'active' : ''; ?>"><i class="fas fa-code"></i> Problema 7</a></li>
                <li><a href="?p=p8" class="<?php echo ($_GET['p'] == 'p8') ? 'active' : ''; ?>"><i class="fas fa-code"></i> Problema 8</a></li>
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

            //PROBLEMA 8 ########################################################################################
            


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

            //Problema 3 ###################################################################################
            elseif ($pagina == 'p3') { 
                   echo '
                    <div class="card">
                    <h2>Problema 10: Desglozar la palabra </h2>
                    <p>Mostrar la posicion y el total de este de una palabra introducida.</p>
                    
                    <form method="POST" class="form-style">
                        <input type="text" name="text" placeholder="Ingresa una palabra" required>
                        <button type="submit" name="calc_p3">Ejecutar Prueba</button>
                    </form>
                    '; //encabezado

                    if (isset($_POST['calc_p3'])) {
                    $palabra = $_POST['text'];
                    $abecedario = "abcdefghijklmnopqrstuvwxyz";


                $palabra = strtolower($palabra);
                $total = 0;

                echo '<div class="box_general" style="padding:15px; padding-top:0;">';
                echo "<h3>Desglose de la palabra: " . ucfirst($palabra) . "</h3>";
                echo "<ul>";

                for ($i = 0; $i < strlen($palabra); $i++) {
                $letra = $palabra[$i];

                for ($j = 0; $j < strlen($abecedario); $j++) {
                if ($letra == $abecedario[$j]) {
                $valor = $j + 1; // a=1, b=2...
                $total += $valor;

                echo "<li>Letra <strong>$letra</strong>: posición $valor</li>";
            }
        }
    }

        echo "</ul>";
        echo "<strong>Valor total acumulado: $total</strong>";
        echo '</div>';
        }
}

            //Problema 4 ###################################################################################
            elseif ($pagina == 'p4') { 
                   echo '
                    <div class="card">
                    <h2>Problema 4: Calcular el salario bruto y neto </h2>
                    <p>Mostrar en pantalla el salario bruto y neto de un empleado.</p>
                    
                    <form method="POST" class="form-style">
                       <input type="number" class= "inputB_G" step="any" min=0 name="salarioHora" placeholder="Ingresa el salario por hora" required>
                       <input type="number" class= "inputB_G"  min=0 name="horasTrabajadas" placeholder="Ingresa las horas trabajadas" required>
                       <input type="number" class= "inputB_G"  min=0 name="nHijos" placeholder="Ingresa la cantidad de hijos" required>
                        <button class= "inputB_G" type="submit" name="calc_p4">Ejecutar Prueba</button>
                    </form>
                    '; //encabezado

                    if (isset($_POST['calc_p4'])) {

                    $salario_por_hora = $_POST['salarioHora'];
                    $horas_trabajadas = $_POST['horasTrabajadas']; 

                    $seguro_social_tasa = 0.0975; 
                    $seguro_educativo_tasa = 0.125;

                    $horas_base_limite = 80;
                    $pago_extras = 0;
                    $extras = 0;

                    if ($horas_trabajadas > $horas_base_limite) {
                    $extras = $horas_trabajadas - $horas_base_limite;
                    $pago_base = $horas_base_limite * $salario_por_hora;
    
                    $precio_hora_extra = $salario_por_hora * 1.50; 
                    $pago_extras = $extras * $precio_hora_extra;
    
                    $salario_bruto = $pago_base + $pago_extras;
                    } else {
                    $pago_base = $horas_trabajadas * $salario_por_hora;
                    $salario_bruto = $pago_base;
                    }

                    $deduccion_social = $salario_bruto * $seguro_social_tasa;
                    $deduccion_educativo = $salario_bruto * 0.0125; // 1.25%
                    $salario_neto_parcial = $salario_bruto - ($deduccion_social + $deduccion_educativo);

                    echo '<div class="box_general" style="padding:20px">';
                    echo "<strong>RESUMEN DE PAGO DETALLADO</strong><br>";
                    echo "Salario por hora: $" . number_format($salario_por_hora, 2) . "<br>";
                    echo "Horas Regulares (80h): $" . number_format($pago_base, 2) . "<br>";

                    if ($extras > 0) {
                    echo "Horas Extras (" . $extras . "h) a tiempo y medio: $" . number_format($pago_extras, 2) . "<br>";
                    }

                    echo "<br>";
                    echo "<strong>SALARIO BRUTO TOTAL: $" . number_format($salario_bruto, 2) . "</strong><br>";
                    echo "<br>";
                    echo "Deducción Seguro Social (9.75%): $" . number_format($deduccion_social, 2) . "<br>";
                    echo "Deducción Seguro Educativo (1.25%): $" . number_format($deduccion_educativo, 2) . "<br>";
                    echo "<br>";

                   
                    $hijos = $_POST['nHijos']; 
                    $pension = ($hijos >= 1) ? true : false;  
                    $bono_hijos = 0;

                    if ($hijos == 1) {
                    $bono_hijos = $salario_bruto * 0.20;
                    } elseif ($hijos == 2) {
                    $bono_hijos = $salario_bruto * 0.30;
                    } elseif ($hijos >= 3) {
                    $bono_hijos = $salario_bruto * 0.40;
                    }

                    $salario_neto_final = $salario_neto_parcial + $bono_hijos;

                    echo "Pensión Alimenticia: " . ($pension ? "Activa" : "No aplica") . "<br>";
                    echo "Bono por Hijos (" . $hijos . "): $" . number_format($bono_hijos, 2) . "<br>";
                    echo "<br>";
                    echo "<strong>SALARIO NETO FINAL: $" . number_format($salario_neto_final, 2) . "</strong>";
                    echo '</div>';
                    } //resultado
                }

                //Problema 5 ####################################################################################
                 elseif ($pagina == 'p5') { 
                   echo '
                    <div class="card">
                    <h2>Problema 5: Analizador </h2>
                    <p>Mostrar si el numero introducido es par o impar, perfecto, es primo y su numero en binario, octal y hexadecimal.</p>
                    
                    <form method="POST" class="form-style">
                       <input type="number" class= "inputB_G" min=0 name="num" placeholder="Ingresa un numero" required>
                       <button class= "inputB_G" type="submit" name="calc_p5">Ejecutar Prueba</button>
                    </form>
                    '; //encabezado

                    if (isset($_POST['calc_p5'])) {                      
                   $n = $_POST['num'];

                   echo "<div class='box_general' style='padding: 20px; padding-top:0;'>";
                  echo "<h3>Resultados para el número: $n</h3>";

        // --- SECCIÓN PURA DE "IF" ---

        // 1. Par o Impar
        if ($n % 2 == 0) {
            echo "El número es: PAR <br>";
        } else {
            echo "El número es: IMPAR <br>";
        }

        // 2. Número Perfecto (Lógica simplificada con IF)
        // (Nota: Como no quieres el 'for' aquí, calculamos la suma directamente)
        $suma = 0; 
        for($i=1; $i<$n; $i++) { if($n%$i==0) $suma+=$i; } // Este for es interno para el cálculo

        if ($suma == $n) {
            echo "Es un número PERFECTO <br>";
        } else {
            echo "NO es un número perfecto <br>";
        }

        // 3. Número Primo (Decisión con IF)
        $c = 0;
        for($i=1; $i<=$n; $i++) { if($n%$i==0) $c++; } // Cálculo interno

        if ($c == 2) {
            echo "Es un número PRIMO <br>";
        } else {
            echo "NO es un número primo <br>";
        }

        echo "<hr>";

        //

        // Binario
        $bin = "";
        for ($i = $n; $i > 0; $i = (int)($i / 2)) {
            $bin = ($i % 2) . $bin;
        }
        echo "Binario: " . ($bin ?: "0") . "<br>";

        // Octal
        $oct = "";
        for ($i = $n; $i > 0; $i = (int)($i / 8)) {
            $oct = ($i % 8) . $oct;
        }
        echo "Octal: " . ($oct ?: "0") . "<br>";

        // Hexadecimal
        $hex = "";
        $letras = "0123456789ABCDEF";
        for ($i = $n; $i > 0; $i = (int)($i / 16)) {
            $hex = $letras[$i % 16] . $hex;
        }
        echo "Hexadecimal: " . ($hex ?: "0");

        echo "</div>";

    }
} //resultado 
    
                //Problema 6 ###################################################################################
            elseif ($pagina == 'p6') { 
                   echo '
                    <div class="card">
                    <h2>Problema 6: Lados de un triangulo con el teorema de pitagoras </h2>
                    <p>Encontrar lados de un triangulo con teorema de pitagoras .</p>
                    
                    <form method="POST" class="form-style">
                        <input type="number" min=0 name="number1" placeholder="Ingresa el lado A" required>
                        <input type="number" min=0 name="number2" placeholder="Ingresa el lado B" required>
                        <input type="number" min=0 name="number3" placeholder="Ingresa el lado C" required>
                        <button class="inputB_G"type="submit" name="calc_p6">Ejecutar Prueba</button>
                    </form>
                    '; //encabezado

                    if (isset($_POST['calc_p6'])) {
                    $a = $_POST['number1'];
                    $b = $_POST['number2'];
                    $c = $_POST['number3'];
                    
                    
      if ($b > $a &&($c != $a && $c != $b) ){
          $ladoc = sqrt(($a**2) + ($b**2)); 
          $ladoa = sqrt(($c**2) - ($b**2)); 
          $ladob = sqrt(($c**2) - ($a**2)); 
         
          echo '<div class="box_general" style="padding:20px; padding-top:0;">';

          echo "<h3> RESULTADOS </h3>";
          echo "Este es el lado del triangulo C: " .$ladoc;
          echo "</br>Este es el lado del triangulo A: " .$ladoa;
          echo "</br>Este es el lado del triangulo B: "  .$ladob;
      }
          else {
            echo "<h2> Error al introducir los datos </h2>";
          }
     echo "</div>";
        }
}
                       elseif ($pagina == 'p7') { 
                   echo '
                    <div class="card">
                    <h2>Problema 7: Encontrar los numeros no repetidos </h2>
                    <p>dado 2 numeros positivos, encontrar los digitos del numero que no se repitan en ambos numeros .</p>
                    
                    <form method="POST" class="form-style">
                        <input type="number" name="num1" placeholder="Ingresa un número" required>
                        <input type="number" name="num2" placeholder="Ingresa un número" required>
                        <button type="submit" name="calc_p7">Ejecutar Prueba</button>
                    </form>
                    '; //encabezado

                    if (isset($_POST['calc_p7'])) {
                    $numero1 = $_POST['num1'];
                    $numero2 = $_POST['num2'];

                    $numerosA = str_split($numero1);
                    $numerosB = str_split($numero2);

                    echo '<div class="box_general" style="border:none;">';
                    echo 'Numeros repetidos: ';

                    for($f=0; $f<count($numerosA); $f++){
                        for($c=0; $c<count($numerosB); $c++){

                            if($numerosA[$f] == $numerosB[$c]){break;}
                            else if ($numerosA[$f] != $numerosB[$c] && $c == count($numerosB) - 1 ){
                                echo $numerosA[$f];
                            }
                        }
                    }


                    for($c=0; $c<count($numerosB); $c++){
                        for($f=0; $f<count($numerosA); $f++){

                            if($numerosB[$c] == $numerosA[$f]){break;}
                            else if ($numerosB[$c] != $numerosA[$f] && $f == count($numerosA) - 1 ){
                                echo $numerosB[$c];
                            }
                        }
                    }
                    echo '</div>';           
            } //resultado
        }


                elseif ($pagina == 'p8') { 
                   echo '
                    <div class="card">
                    <h2>Problema 8: TABLA DEL 1 AL 50 [MULTIPLOS DE 2, 3 Y 5] </h2>
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
            ?>
        </main>
    </div>

</body>
</html>

