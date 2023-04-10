<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <!-- Ejercicio 2 -->
    <h3 class="py-5 px-3" >b.En una página se ingresan cuatro números, calcular y mostrar la suma de los dos primeros 
        y el producto del tercero y el cuarto (4 puntos).</h3>
        <form action="ejercicio2.php" method="POST" class="px-3">
        <p>Número 1: <input type="number" name="n1"></p>
        <p>Número 2: <input type="number" name="n2"></p>
        <p>Número 3: <input type="number" name="n3"></p>
        <p>Número 4: <input type="number" name="n4"></p>
        <p><input type="submit" value="REALIZAR OPERACIONES"></p>
        <?php
          $n1 =$_POST["n1"];
          $n2 =$_POST["n2"];
          $n3 =$_POST["n3"];
          $n4 =$_POST["n4"];
          $sum = $n1 + $n2;
          $pro = $n3 * $n4;
            
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
            $mensaje = "La suma de los dos primeros números es: $sum <br>
            El producto del tercer y cuarto número es: $pro";
        }

        ?>
        <?php if(isset($mensaje)): ?>
        <div ><?php echo $mensaje; ?></div>
        <?php endif; ?>
        </form>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>  
</body>
</html>