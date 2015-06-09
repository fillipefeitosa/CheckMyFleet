<?php


//chamando Classes
include_once("LoginProcess.php");
include_once("../model/ConectionDB.php");
include_once("../model/User.php");


$login = $_POST['login'];
$senha = $_POST['password'];
$idUsuario;

echo $login;

//verificação de campos em branco
$objProcessa = new LoginProcess();
$objProcessa->checaDados($login, $senha);



 /* Inicio da Conexao*/
 $objConexaoBanco = new ConectionDB();
 //parametros para conexao com o banco
 $objConexaoBanco->set('db', 'check');
 $objConexaoBanco->set('host', 'localhost');
 $objConexaoBanco->set('user', 'check');
 $objConexaoBanco->set('pass', 'check');
 $objConexaoBanco->set('sql', 'SELECT * FROM `User` WHERE userLogin = "'.$login.'" AND userPassword = "'.$senha.'"');
 echo "****DEBUG***;
 $objConexaoBanco->conectar();
 $objConexaoBanco->selecionarDB();
 $result = $objConexaoBanco->consulta();

?>
