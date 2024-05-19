<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    include("conexion.php");


    $email = $_POST["email"];
    $clave = $_POST["password"];
  
    mysqli_select_db($conn, "base");




    $sql = "SELECT * FROM `datos` WHERE email ='$email' AND clave = '$clave'";

    $resultado = $conn->query($sql);




    if ($resultado->num_rows == 1) {
        header('Location: index1.php'); 
    } else {
        header('Location: index.php'); 
    }
    $conn->close();
}
