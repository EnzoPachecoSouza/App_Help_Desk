<?php //UTILIZADO PARA NAO DAR ACESSO PARA OUTRAS SEÇÕES, TIRANDO O INDEX QUE É PUBLICO, OS OUTROS É APENAS QUANDO O USER FOR AUTENTICADO
  session_start();

  if (!isset($_SESSION["autenticado"]) OR $_SESSION["autenticado"] != 'SIM'){
    header('location: index.php?login=erro2'); 
  }
?>