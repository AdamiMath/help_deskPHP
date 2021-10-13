<?php 

  session_start();

  //variavel para verifacação de autentificação

  $usuario_autenticado = false;
  $usuario_id = null;
  $usuario_perfil_id = null;

  $perfis = array( 1 => 'administrativo', 2 => 'usuario');

  //usuarios do sistema
  //utilizar essas contas para teste
  $usuario_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '12345', perfil_id => 1),
    array ('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '12345', perfil_id => 1),
    array ('id' => 3, 'email' => 'maria@teste.com.br', 'senha' => '12345', perfil_id => 2),
    array ('id' => 4, 'email' => 'jose@teste.com.br', 'senha' => '12345', perfil_id => 2),
  );

  foreach($usuario_app as $usuario){
    //validacao de email e senha
    if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
    $usuario_autenticado = true;
    $usuario_id = $usuario['id'];
    $usuario_perfil_id = $usuario['perfil_id'];
    }
  }
  if($usuario_autenticado){
    $_SESSION['autenticado'] = 'sim';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
  }else{
    $_SESSION['autenticado'] = 'nao';
    header('Location: index.php?login=erro');
  }
?>