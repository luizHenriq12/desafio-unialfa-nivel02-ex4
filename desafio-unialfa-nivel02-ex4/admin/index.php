

<?php
    if ($_POST) {
        session_start();

        $login = $_POST["login"] ?? NULL;
        $senha = $_POST["senha"] ?? NULL;


        if(isset($login) && isset($senha)){
            $_SESSION["usuario"] = array(
                "login" => $login,
                "senha" =>$senha
            );
        }

        echo "<script>location.href='login.php'</script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/summernote/summernote.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css"></script>
</head>
<body>
<div class="login">
    <h1 class="text-center">Faça o cadastro</h1>
    <form method="post">
        <label for="login">Digite o Login:</label>
        <input type="text" name="login" id="login" class="form-control" 
        required placeholder="Preencha o campo ">

        <br>

        <label for="senha">Digite a Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" 
        required placeholder="Preencha o campo ">

        <br>

        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    </form>
</div>
</body>
</html>