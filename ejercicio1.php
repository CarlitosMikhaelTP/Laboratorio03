<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<!-- EJERCICIO 1: -->
    <h3 class="py-5 px-3">a.Se ingresan el nombre de un usuario y su e-mail por teclado, considere que los dos campos 
    deben ser obligatorios. Mostrar posteriormente los datos en una página PHP (4 puntos).</h3>
    <form action="resultados1.php" method="post">
        <label class="px-3" for="">Nombre del usuario : </label><input type="text" name="usuario" placeholder="Campo obligatorio"><br><br>
        <label class="px-3" for="">E-mail del usuario : </label><input type="email" name="email" placeholder="Campo obligatorio"><br><br>
        <div class="px-3"><input type="submit" value="Enviar"></div>    
    </form> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>