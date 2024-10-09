<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas lunch</title>
</head>

<body>
    <h1>Reservas lunch</h1>
    <form method="post">        
       
            <div>
                <label for="data">Introduza a data: </label>
                <input type="date" name="data" id="data" min="2024-10-08" value="2024-10-08" max="2024-10-31" required>
            </div>
        <div><label for="hora">Introduza a hora comida</label><input type="time" name="hora" id="hora" min="13:00" max="15:00" value="13:00"></div>
        <fieldset>
            <legend>Ubicacion</legend>
            <input type="radio" name="ubicacion" id="interior" value="i"> <label for="interior">Interior</label>
            <input type="radio" name="ubicacion" id="terraza" checked value="t"> <label for="terraza">Terraza</label>
        </fieldset>
        <div>
            <label for="prendas">Introduza se é alérxico a algún dos seguintes elementos</label>
            <select name="alerxenos[]" id="alerxenos" multiple>
                <option value="" disabled></option>
                <option value="leite">Leite</option>
                <option value="ovo">Ovo</option>
                <option value="gluten">Gluten</option>
            </select>
        </div>
        <input type="submit" value="Reservar">
    </form>

    <?php
    //cambiar $_POST por $_GET en función del método HTTP utilizado
    foreach ($_POST as $clave => $valor) {

        echo "<strong>$clave</strong>:";

        if (!is_array($valor)) {

            
                echo $valor;
           
        } else {

            echo var_dump($valor);
        }

        echo "<br/>";
    }
    ?>
</body>

</html>