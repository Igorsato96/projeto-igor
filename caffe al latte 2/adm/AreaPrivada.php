<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }

?>

<p>Bem-vindo, <?php echo $_SESSION['user_name']; ?>

<a href="sair.php">sair</a>