<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <!-- EJERCICIO 4 -->
    <h3 class="px-3 py-3">d.Se ingresan tres notas de un alumno, si el promedio es mayor o igual a 13 mostrar 
        el mensaje 'aprobado', sino 'reprobado' (4 puntos).</h3>
        <form action="ejercicio4.php" method="POST" class="px-3">
        <p>Nota 1: <input type="number" name="nota1"></p>
        <p>Nota 2: <input type="number" name="nota2"></p>
        <p>Nota 3: <input type="number" name="nota3"></p>
        <p><input type="submit" value="PROMEDIAR"></p>
      <?php
        if($_POST){
          $nota1 =$_POST["nota1"];
          $nota2 =$_POST["nota2"];
          $nota3 =$_POST["nota3"];
          $promedio = ($nota1 + $nota2 + $nota3)/3;
          if($promedio>=13 ){
            echo "Promedio del Alumno: $promedio Aprobado";
          }elseif($promedio<13){
            echo "Promedio del Alumno: $promedio Reprobado";
          }
        }    
            
       ?>
        </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>     
</body>
</html>