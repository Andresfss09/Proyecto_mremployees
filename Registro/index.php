<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form method="post">
    <h2>MR.EMPLOYEES</h2>
    <p>Inicia tu registro</p>

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre">
        <img class="input-icon" src="images/bxs-user-pin.svg" alt="">
     </div>
     <div claiv class="input-wrapper">
        <input type="email" name="email" placeholder="Email">
        <img class="input-icon" src="images/bxs-envelope.svg" alt="">
     </div>
     <div class="input-wrapper">
        <input type="text" name="direction" placeholder="Direccion">
        <img class="input-icon" src="images/bxs-directions.svg" alt="">
     </div>
     <div class="input-wrapper">
        <input type="tel" name="phone" placeholder="Telefono">
        <img class="input-icon" src="images/bxs-phone.svg" alt="">
     </div>
     <div class="input-wrapper">
        <input type="password" name="password" placeholder="Contraseña">
        <img class="input-icon" src="images/bxs-key.svg" alt="">
     </div>

     <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php 
    include("registrar.php");
    ?>
</body>
</html>