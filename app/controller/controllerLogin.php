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

echo "****DEBUG";

// /* Inicio da Conexao*/
// $objConexaoBanco = new ConexaoBanco;
// //parametros para conexao com o banco
// $objConexaoBanco->set('db', 'check');
// $objConexaoBanco->set('host', 'localhost');
// $objConexaoBanco->set('user', 'check');
// $objConexaoBanco->set('pass', 'check');
// $objConexaoBanco->set('sql', 'SELECT * FROM `User` WHERE userLogin = "'.$login.'" AND userPassword = "'.$senha.'"');
// //
// $objConexaoBanco->conectar();
// $objConexaoBanco->selecionarDB();
// $result = $objConexaoBanco->consulta();
//
// if (mysql_num_rows($result) != 1) {
//   // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
//   echo "Login inválido!"; exit;
// }else{
//
//
// //agregando os resultados da consulta
//             $resultadoConsulta=  mysql_fetch_array($result);
//             echo $resultadoConsulta['idUsuario'];
//             echo "</br>";
//             echo $resultadoConsulta['usuario_login'];
//             echo "</br>";
//             echo $resultadoConsulta['usuario_tipo'];
//             echo "</br>";
//
//             //Instanciando Usuário
//             $controleNovoUsuario = new Usuario;
//             $controleNovoUsuario->set('id', $resultadoConsulta['idUsuario']);
//             $controleNovoUsuario->set('login', $resultadoConsulta['usuario_login']);
//             $controleNovoUsuario->set('tipo', $resultadoConsulta['usuario_tipo']);
//
//
//             $objProcessa->setUsuario($controleNovoUsuario);
//             $objProcessa->criaSessao();
//             $objConexaoBanco->encerraConexao();
//             $objProcessa->redirecionaUsuario();
//
//
//             echo "</br>tudo certo!";
//
//
//
// }

?>
