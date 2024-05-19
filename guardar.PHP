<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    include("conexion.php");
    $email = $_POST["email"];
    $clave = $_POST["password"];



    $sql = "INSERT INTO datos (email, clave) VALUES ('$email', '$clave')";

    

    if ($conn->query($sql) === TRUE) {
        echo "Created successfully";
        header('Location: index.php');
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
