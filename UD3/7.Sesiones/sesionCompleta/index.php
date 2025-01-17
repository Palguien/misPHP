<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form action='login.php' method='post'>
        <fieldset>
            <legend>Login</legend>
            <?php
                if(isset($error)){
                    //Si hay error al hacer login
                    //Muestra el error
                    echo $error;
                }
                if(isset($_GET["loginEnIndex"])){
                    //Si intentó entrar en main, lo mostrará
                    echo "Haz login para entrar en esta página<br>";
                }
            ?>
            <br>
                <label for='usuario'>Usuario:</label><br>
                <input type='text' name='user' id='user' maxlength="50"/><br>

                <label for='password'>Contraseña:</label><br>
                <input type='password' name='pass' id='pass' maxlength="50"/><br>
            <br>
                <input type='submit' name='enviar' value="Enviar"/>
        </fieldset>
    </form>
</body>
</html>