<?php
session_start();

include_once("conexion.php");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // login successful
    $row = $result->fetch_assoc();
    $_SESSION["user_id"] = $row["id"];
    header("Location: ../home.php");
} else {
    // login failed
    $_SESSION["login_error"] = "Correo o contraseña incorrectos";
    echo 'incorrect username / password please try again.' ;
}
?>
