<?php
require __DIR__ . '/models/user.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    $user = new user($name, $lastName, $password, $number, $email, $gender);
    
    $fileWriter = fopen("users.txt", "a");

    if ($fileWriter) {
        fwrite($fileWriter, $user->toJson() . "\n");
        fclose($fileWriter);
        $msg = $user->toJson();
    } else {
        $msg = "Error en el formulario";
    }
    echo  $msg;
}
