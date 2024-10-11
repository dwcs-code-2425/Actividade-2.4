<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Zodiaco</title>
</head>

<body>

    <?php
    const CAPRICORNIO = "Capricornio";
    const ACUARIO = "Acuario";
    const PISCIS = "Piscis";
    const ARIES = "Aries";
    const TAURO = "Tauro";
    const GEMINIS = "Géminis";
    const CANCER = "Cáncer";
    const LEO = "Leo";
    const VIRGO = "Virgo";
    const LIBRA = "Libra";
    const ESCORPIO = "Escorpio";
    const SAGITARIO = "Sagitario";

    $meses = ["Xaneiro", "Febreiro", "Marzo", "Abril", "Maio", "Xuño", "Xullo", "Agosto", "Setembro", "Outubro", "Novembro", "Decembro"];

    const DIA_FIN_MES = 31;
    const DIA_INI_MES = 1;
    const MES_INI = 1;
    const MES_FIN = 12;
    //Las claves del día de corte van incluídas. Por ejemplo: los nacidos hasta el 20/01 son capricornio
    $zodiaco = array(
        //enero  
        1 => array(
            20 => CAPRICORNIO,
            "else" => ACUARIO
        ),
        //febrero
        2 => array(
            19 => ACUARIO,
            "else" => PISCIS
        ),
        //marzo
        3 => array(
            20 => PISCIS,
            "else" => ARIES
        ),
        //abril
        4 => array(
            19 => ARIES,
            "else" => TAURO
        ),
        //mayo
        5 => array(
            20 => TAURO,
            "else" => GEMINIS
        ),
        //junio
        6 => array(
            20 => GEMINIS,
            "else" => CANCER
        ),
        //julio
        7 => array(
            22 => CANCER,
            "else" => LEO
        ),
        //agosto
        8 => array(
            22 => LEO,
            "else" => VIRGO
        ),
        //septiembre
        9 => array(
            22 => VIRGO,
            "else" => LIBRA
        ),
        //octubre
        10 => array(
            23 => LIBRA,
            "else" => ESCORPIO
        ),
        //completar aquí...
        //novembro
        11 => array(
            22 => ESCORPIO,
            "else" => SAGITARIO
        ),
        12 => array(
            21 => SAGITARIO,
            "else" => CAPRICORNIO
        )
    );
    ?>
    <form method="post">

        Selecciona tu día y mes de nacimiento:

        <p>
            <label for="dia">Día:</label>
            <select name="dia" id="dia" required>
                <?php
                for ($i = DIA_INI_MES; $i <= DIA_FIN_MES; $i++) {
                    if (isset($_POST["dia"]) && ($_POST["dia"] == $i)) {
                        echo "<option value=\"$i\" selected>$i</option>";
                    } else {
                        echo "<option value=\"$i\">$i</option>";
                    }

                    // otra opción
                    // $selected_or_not=
                    // isset($_POST["dia"]) && ($_POST["dia"] == $i)? "selected": "";
                    // echo "<option value=\"$i\" $selected_or_not >$i</option>";
                }
                ?>

            </select>


            <label for="mes">Mes</label>
            <select name="mes" id="mes" required>
                <?php
                for ($i = MES_INI; $i <= MES_FIN; $i++) {
                    $index_mes = $i - 1;
                    if (isset($_POST["mes"])  && ($_POST["mes"] == $i)) {
                        echo "<option value=\"$i\" selected>$meses[$index_mes]</option>";
                    } else {
                        echo "<option value=\"$i\">$meses[$index_mes]</option>";
                    }
                }
                ?>


            </select>



        </p>


        <p>
            <input type="submit" value="Enviar" />
        </p>



    </form>


    <?php
    if (isset($_POST["dia"], $_POST["mes"])) {
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];

        echo "<p> O día é  $dia</p>";
        echo "<p> O mes  é  $mes</p>";

        $clave_primera = array_key_first($zodiaco[$mes]);

        if ($dia > $clave_primera) {
            $signo = $zodiaco[$mes]["else"];
        } else {
            $signo = $zodiaco[$mes][$clave_primera];
        }

        echo "<p> O signo que corresponde é: $signo</p>";
    }
    ?>


</body>

</html>