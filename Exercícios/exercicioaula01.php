<form action="" method="post"> 

    <input name="n1" type="text" placeholder="Número 1"> <br>

    <input name="n2" type="text" placeholder="Número 2"> <br>

    <button name="soma">Somar</button>
    <button name="subtrair">Subtrair</button>
    <button dividir="dividir">Dividir</button>
    <button name="multiplicar">Multiplicar</button>

</form>

<?php

    if ($_POST)  {
        
        if (isset($_POST['subtrair'])) {
            echo $_POST['n1'] - $_POST['n2'];
        }

        if (isset($_POST['soma'])) {
            echo $_POST['n1'] + $_POST['n2'];
        }

        if (isset($_POST['dividir'])) {
            echo $_POST['n1'] / $_POST['n2'];
        }

        if (isset($_POST['multiplicar'])) {
            echo $_POST['n1'] * $_POST['n2'];
        }
    }

?>