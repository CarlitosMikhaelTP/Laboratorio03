<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los valores del formulario
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];

  echo "Nombre del usuario: $usuario <br> E-mail del usuario: $email";

    // Validamos que los campos obligatorios no estén vacíos
if (empty($usuario) || empty($email)) {
  echo "<p style='color:red;'>Debe completar todos los campos obligatorios.</p>";
  } else {
    // Proceso del formulario
  }
}
?>