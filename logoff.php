<?php
    session_start();

    //remover índices do array de SESSÃO
    //unset() --> remove o valor de qualquer array


    //destruir a variável de SESSÃO
    //session_destroy()

    session_destroy();
    header("Location: index.php");
?>