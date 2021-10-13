<?php 
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  $arquivo = fopen('arquivo.txt', 'a');
  $texto = $_POST['titulo'] . '#' . $_POST['categoria'] . '#' .  $_POST['descricao'] . PHP_EOL;
  fwrite($arquivo, $texto);
  fclose($arquivo);
  
  header('Location: abrir_chamado.php')

?>