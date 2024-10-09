<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartado 1</title>
</head>

<body>
    <h1>Tenda de roupa</h1>

    <form action="">
        <div>
            <label for="prendas">Seleccione o tipo de prenda</label>
            <select name="prendas[]" id="prendas" multiple>
                <option value="abrigos">Abrigos</option>
                <option value="tops">Tops</option>
                <option value="camisetas">Camisetas</option>
            </select>
        </div>
        <div>
            <label for="cor">Cor</label>
            <input type="color" name="cor" id="cor">
        </div>
        <input type="submit" value="Enviar">

    </form>

    <?php
    //cambiar $_POST por $_GET en función del método HTTP utilizado
    foreach ($_GET as $clave => $valor) {

        echo "<strong>$clave</strong>:";

        if (!is_array($valor)) {

            if ($clave == "cor") {
                echo "<span style=\"background-color:$valor\"> $valor</span>";
            }
            else{
                echo $valor;
            }
        } else {

            echo var_dump($valor);
        }

        echo "<br/>";
    }
    ?>
</body>

</html>