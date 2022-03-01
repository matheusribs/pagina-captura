<?php

$nome  = $_POST['nome'];
$email = $_POST['email'];

$mysqli = new mysqli("localhost", "root", "", "bdCaptura");

if ($mysqli == true) {
   // echo 'Banco conectado com sucesso';
} else {
   // echo 'Erro ao conectar com o banco';
}

$consulta = 'insert into dados (nome,email) values ("'.$nome.'", "'.$email.'")';

if ($nome == null || $email == null){

    echo '<br>Nenhum dado foi passado';

}else {

$result =  mysqli_query($mysqli, $consulta);

    if ($result == true) {

        echo '<br><font color="green">Os dados foram registrados com sucesso</font> <a href="index.php">VOLTAR</a>';

    } else {

        echo '<br>ERRO - Ao registrar os dados';

    }

}

?>