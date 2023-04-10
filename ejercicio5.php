<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <!-- EJERCICIO 5 -->
    <h3 class="px-3 py-3">e.Se cargan por teclado tres números distintos. Mostrar por pantalla 
        el mayor de ellos (4 puntos).</h3>
        <form action="ejercicio5.php" method="POST" class="px-3">
        <p>Número 1: <input type="number" name="n1"></p>
        <p>Número 2: <input type="number" name="n2"></p>
        <p>Número 3: <input type="number" name="n3"></p>
        <p><input type="submit" value="Hallar el número mayor"></p>
      <?php
        if($_POST){
          $n1 =$_POST["n1"];
          $n2 =$_POST["n2"];
          $n3 =$_POST["n3"];
          if(empty($_POST["n1"]) || empty($_POST["n2"]) || empty($_POST["n3"])) {
            echo "Debe ingresar valores para los tres números. Por favor, inténtelo de nuevo.";
            exit(); // Finalizar la ejecución del script para evitar mostrar el resultado del cálculo.
          }if($n1>$n2 && $n1>$n3){
            echo "De los números ($n1, $n2 y $n3) el número mayor de todos es $n1";
          }elseif($n2>$n1 && $n2>$n3){
            echo "De los números ($n1, $n2 y $n3) el número mayor de todos es $n2";
          }elseif($n3>$n1 && $n3>$n2){
            echo "De los números ($n1, $n2 y $n3) el número mayor de todos es $n3";
          }elseif($n1==$n2 || $n1==$n3 || $n2==$n3 )
            echo "Usted puso los siguientes números ($n1, $n2 y $n3): Todos los números deben ser diferentes INTENTELO DE NUEVO";
        }else{
            echo "Fallo desconocido: REINICIE WINDOWS";
        }      
       ?>
        </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>     
</body>
</html>