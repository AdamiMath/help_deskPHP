<?php 

  session_start();

  //variavel para verifacação de autentificação

  $usuario_autenticado = false;

  //usuarios do sistema
  $usuario_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '12345'),
    array ('email' => 'user@teste.com.br', 'senha' => 'asdf'),
  );

  foreach($usuario_app as $usuario){
    //validacao de email e senha
    if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha'])
    $usuario_autenticado = true;
  }

  if($usuario_autenticado){
    $_SESSION['autenticado'] = 'sim';
    header('Location: home.php');
  }else{
    $_SESSION['autenticado'] = 'nao';
    header('Location: index.php?login=erro');
  }
?>