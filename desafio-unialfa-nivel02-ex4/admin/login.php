<title>Login</title>
<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $login = $_SESSION['usuario']['login'];
    $senha = $_SESSION['usuario']['senha'];

    echo "Login e senha:";
    echo "<br>";
    print_r($login);
    echo "<br>";
    print_r($senha);
    exit;
}
    echo "Login e senha não corresponde com nenhuma cadastrada.";
?>