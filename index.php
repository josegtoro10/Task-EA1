<?php
include("classes/clase_general.php");

if($_POST){
    $animal = new Animal();
    $tipo = $animal->clasificacion($_POST['numeroPatas'],$_POST['numeroAlas'],$_POST['tipoAnimal']);
    
    if ($tipo == true){
        echo $tipo;
    } else{
        echo "<h2>Error animal equivocado</h2>";
    }
}

?>

<!-- Ingreso de Datos -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/index.css">
    <title>Evaluacion1</title>
</head>
<body>
    <div class="contenedor">
    <form method="post" class="form">
        <label>Numero de Patas</label><br>
        <input type="text" name="numeroPatas"><br>
        <label>Numero de Alas</label><br>
        <input type="text" name="numeroAlas"><br>
        <label>Tipo de Animal: Caballo, Pato o Paloma</label><br>
        <input type="text" name="tipoAnimal">
        <input type="submit" value="Enviar">

    </form>
    </div>      
</body>
</html>