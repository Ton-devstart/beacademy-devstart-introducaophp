<?php

$a1 = [
    'nome' => 'ton',
    'email' => 'berto@gmail.com',
    'telefone' => '18 9898-9898',
    'notas' => [
        9,
        7,
        6.5,
        4
    ]
];

$a2 = [
    'nome' => 'ton',
    'email' => 'berto@gmail.com',
    'telefone' => '18 9898-9898',
    'notas' => [
        7,
        8,
        6.5,
        4
    ]
];


$alunos = [
    $a1,
    $a2,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5"> Alunos </h1> 
    <table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>email</th>
            <th>telefone</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($alunos as $cadaAluno) {
                echo '<tr>';
                    echo '<td>' . $cadaAluno['nome'] . '</td>';
                    echo '<td>' . $cadaAluno['email'] . '</td>';
                    echo '<td>' . $cadaAluno['telefone'] . '</td>';
                echo '</tr>'; 
            }
        ?>
    </tbody>
    </table> 
</div>       