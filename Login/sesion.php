<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones matematicas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Style.css"  type="text/css"/>
</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>   
</body>
</html>

<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$pasward1="1234567";
$passward2="123456";
$passward3="abcdef";


if ($password==$passward1){
    
    swal(
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yiss!",
      );
      
}

if ($password===$passward2){
    echo'Bienvenido';
}
if ($password===$passward3){
    echo'Bienvenido';
}
else{
    echo'Contraseña incorrecta';
}



?>
