<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <meta author="Pablo Pollos">
    <style>
        th,td{
            text-align: center;
            border: solid;
            margin: 0;
            padding: 5px;
        }
        .container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        header{
            border-radius: 10px;
            border-style: solid;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            grid-row: 25%, 25%, 25%;
            max-width: 800px;
            
        }
        h1{
            margin-left: 20px;
            grid-column: 1 / 3;
        }
        img{
            grid-column: 4;
        }

    </style>
</head>
<body>
<?php
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    $filename = $_FILES["foto"]["name"];
    $tempname = $_FILES["foto"]["tmp_name"];
    $folder = "../img/".$filename;
    move_uploaded_file($tempname,$folder);
    echo '<br>';

    echo '<header><h1>Nombre y apellidos: <br>' . filtrado($_POST['name'])." ".filtrado($_POST['ape1'])." ".filtrado($_POST['ape2']). "</h1>";
    echo '<img src="'.$folder.'" alt="img" height="150px" width="150px" alt="IMAGEN"/></header>';

?>
    <div class="container">
        <table>
            <tr><th colspan="2">DATOS</th></tr>
            <tr>
                <th>DNI</th>
                <?php
                    echo "<td>".$_POST['dni']."</td>";
                ?>
            </tr>
            <tr>
                <th>Fecha Nacimiento</th>
                <?php
                    echo "<td>".$_POST['nac']."</td>";
                ?>
            </tr>
            <tr>
                <th>Sexo</th>
                <?php
                    echo "<td>".$_POST['sexo']."</td>";
                ?>
            </tr>
            <tr>
                <th>Estudios</th>
                <?php
                    echo "<td>".$_POST['estudios']."</td>";
                ?>
            </tr>
            <tr>
                <th>Idiomas</th>
                <?php
                    echo "<td>".$_POST['idiomas']."</td>";
                ?>
            </tr>
        </table>

        <div class="docu">
            <h2>Currículum</h2>
            <?php                
                $filename = $_FILES["curr"]["name"];
                $tempname = $_FILES["curr"]["tmp_name"];
                $folder = "../img/".$filename;
                move_uploaded_file($tempname,$folder);
                echo '<br><iframe src="'.$folder.'" id="curr" height="400px" width="600px" title="Currículum" alt="IFRAME"/>';
            ?>
        </div>
    </div>
</body>
</html>

