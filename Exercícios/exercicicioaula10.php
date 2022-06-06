<?php

$nome = 'ton';
$sobrenome = 'berto';

$nome2 = 'chiquim solo';

echo "nome: " . ucfirst($nome) . PHP_EOL;

echo "sobrenome: " . ucfirst(strtolower($sobrenome)) . PHP_EOL;

echo "nome2: " . ucwords($nome2);