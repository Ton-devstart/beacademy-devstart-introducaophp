<h1>lista de contatos</h1>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>telefone</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($contatos as $cadaContato) {
                    $partes = explode(';', $cadaContato);
                
                echo '<tr>';
                    echo '<td>' . $partes[0] . '</td>';
                    echo '<td>' . $partes[1] . '</td>';
                    echo '<td>' . $partes[2] . '</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>