<?php

if ($_POST['email'] == 'lucas.rezende.2000@gmail.com' && $_POST['password'] == '1913961813') {
    echo "<h1>Bem vindo: Lucas</h1>";
} else {
    header('Location: login.php?erro=1');
}