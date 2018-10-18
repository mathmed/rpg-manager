
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login RPG Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet">
	<link href="<?= base_url("assets/css/bootstrap.css") ?>" rel="stylesheet" type="text/css" media="all">

    <!-- Importando Materialize -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>


<body>
    <?= $this->session->flashdata("crud_auth");?>
    <div class = "container">
        <div class = "row container-form">
            <div class = "col s3"></div>
            <div class = "col s6">
                <h1 class = "primary-color title-font text-center">Login RPG Manager</h1>
                <form method = "POST" action = "/rpg-manager/login/logar/">
                    <input required class = "form-control" name = "apelido_usuario" placeholder = "Apelido">
                    <input required type = "password" class = "form-control" name = "senha_usuario" placeholder = "Senha">
                    <div class = "div-center espaco-vertical">
                        <button class = "btn button-green">Logar</button>
                    </div>
                </form>
            </div>
            <div class = "col s3"></div>

        </div>
    </div>

</body>


</html>
