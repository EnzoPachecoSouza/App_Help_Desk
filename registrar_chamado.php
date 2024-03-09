<?php
    session_start();

    $titulo = str_replace("#","-", $_POST['titulo']);
    $categoria = str_replace("#","-", $_POST['categoria']);
    $descricao = str_replace("#","-", $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL; //PHP_EOL = end on line, pular linha

    $arquivo = fopen("../../app_help_desk_back/arquivo.hd","a"); //irá abrir um help desk, do tipo a (documentação do PHP)

    fwrite($arquivo, $texto); //escrever o texto do tipo arquivo.hd

    fclose($arquivo); //fechando o arquivo

    header("Location: abrir_chamado.php");
?>