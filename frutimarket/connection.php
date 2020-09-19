<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "fruitmarket";

    $connect = new MySQLi("$host", "$user", "$pass", "$database");

    $connect ->set_charset("utf8");
    if ($connect -> connect_error){
        echo '<div class="alert alert-danger" role="alert"> Não foi Possível se conectar ao banco de dados, verifique suas configurações no arquivo Connection.php</div>';
    } else{
   
    }
?>