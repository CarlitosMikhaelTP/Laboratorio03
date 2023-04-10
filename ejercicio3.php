<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <!-- EJERCICIO 3 -->
    <h3 class="px-3 py-3">c.Realizar una aplicación que lea por teclado dos números, si el primero es mayor al segundo informar su suma 
        y diferencia, en caso contrario informar el producto y la división del primero respecto al segundo. Deberá validar que el segundo número no sea cero (4 puntos).</h3>
        <form action="ejercicio3.php" method="POST" class="px-3">
        <p>Número 1: <input type="number" name="n1"></p>
        <p>Número 2: <input type="number" name="n2"></p>
        <p><input type="submit" value="REALIZAR OPERACIONES"></p>
      <?php
        if($_POST){
          $n1 =$_POST["n1"];
          $n2 =$_POST["n2"];
          if($n1>$n2){
            $suma = $n1 + $n2;
            $diferencia = $n1 - $n2;
            echo "La suma de $n1 y $n2 es : $suma <br>";
            echo "La diferencia de $n1 y $n2 es: $diferencia ";
          }elseif($n2>$n1){
            $producto = $n1 * $n2;
            if($n2 != 0){
              $division = $n1 / $n2; 
              echo "La multiplicación de $n1 y $n2 es : $producto <br>";
              echo "La división de $n1 y $n2 es: $division ";
            }else{
              echo "El segundo número no puede ser cero";
            }
          }else{
            echo "Introduzca números para operar";
          }
         }
       ?>
        </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>     
</body>
</html>