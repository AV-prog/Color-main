<?php


//var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $password = "";
    if (isset($_POST["password"])) {
        $password = htmlspecialchars($_POST["password"]);
    }
    
    $email = htmlspecialchars($_POST["email"]);
    $name = htmlspecialchars($_POST["name"]);



    if(empty($email)||empty($name)||empty($password)){
        exit;
    }

    echo "Form Submiited";
    echo "<br>";
    echo "Email: " .$email. "<br>";
    echo "Name: " .$name. "<br>";
    echo "Password: " .$password. "<br>";

    header("Location: ../index.php");
   
}

else{
    header("Location: ../index.php");
}