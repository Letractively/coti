<?php

    // destroi a sessão

    session_unset( $_SESSION['usuario'] ); 
    session_destroy();
    
    include_once 'index.php';
    include_once 'funcoes.php';
?>
