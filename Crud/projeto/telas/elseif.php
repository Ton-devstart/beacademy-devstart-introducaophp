<?php

$url = $_SERVER['REQUEST_URI'];

    include 'telas/head.php';
    include 'telas/menu.php';
    include 'acoes.php';

    if ($url === '/') {
        home();
    } elseif ($url === '/login') {
        login();
    } elseif ($url === '/cadastro') {
        cadastro(); 
    } elseif ($url === '/listar') {
        listar();
    } else {
        erro404();
    }

include 'telas/footer.php';