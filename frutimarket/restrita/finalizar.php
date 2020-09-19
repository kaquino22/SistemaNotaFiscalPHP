<?php
    include '../connection.php';
    include 'confirmaSession.php';
    echo "<br><hr>";
    session_start();
    $nf = $_SESSION['nf'];
    $total = $_GET['total'];

    echo "NF: ".$nf."<br>";
    echo "TOTAL: ".$total."<br>";

    $consulta = $connect -> 
    prepare("UPDATE notafiscal
        SET valor_total = '$total'
        WHERE IdNotaFiscal = '$nf'"
    ); 
    
    $consulta -> execute();

    header('Location: resetnf.php');
?>