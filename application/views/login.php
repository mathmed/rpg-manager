<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login RPG Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url("css/styles.css") ?>" rel="stylesheet">

    <!-- Importando Materialize -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>


<body>
    
    <div class = "container">
        <div class = "row container-form">
            <div class = "col s4"></div>
            <div class = "col s4">
                <form>
                    <input class = "form-control" name = "apelido_usuario" placeholder = "Informe seu apelido para fazer Login">
                    <input type = "password" class = "form-control" name = "senha_usuario" placeholder = "Informe sua senha para fazer Login">
                </form>
            </div>
            <div class = "col s4"></div>

        </div>
    </div>

</body>


</html>
