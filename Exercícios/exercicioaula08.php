<?php

$url = $_SERVER['REQUEST_URI'];

    echo match ($url) {
        '/' => '<h1>página inicial</h1>',
        '/login' => '<h1>página de login</h1>',
        '/cadastro' => '<h1>página de cadastro</h1>',
        
        default => 'página não encontrada'
    };