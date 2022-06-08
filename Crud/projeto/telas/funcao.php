<?php

function soma($n1, $n2) {
    echo $n1 + $n2;
}

soma(10, 50);

function welcome($nome) {
    echo "bem-vindo {$nome}".PHP_EOL;
}

welcome('maria');
welcome('luiz');
welcome('zé');