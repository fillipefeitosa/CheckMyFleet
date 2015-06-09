<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProcessaLogin
 *
 * @author Fillipe
 */
include_once("../model/User.php");
class LoginProcess {

   public $usuario = null;

   function ProcessaLogin(){
       $this->usuario = new User;
   }
   function setUsuario(User $usuario){
       $this->usuario = $usuario;
   }
    function checaDados($login, $senha){

            if(!isset($login) || $login = ""){
                header("Location: ../index.php"); exit;
            }
                if(!isset($senha) || $senha = ""){
                    header("Location: ../index.php");exit;
                }
    }

    function set($prop, $value){
         $this->$prop = $value;
     }
    function criaSessao(){

            if(!isset($_SESSION))session_start ();
            $_SESSION['userID'] = $this->usuario->get('id');
            $_SESSION['userLogin'] = $this->usuario->get('login');


    }
    function redirecionaUsuario(){


            if($this->usuario->get('tipo')==1){
                header("Location:../interface/candidato/index.php");
            }if($this->usuario->get('tipo')==2){
                header("Location:../interface/secretaria/index.php");
            }if($this->usuario->get('tipo')==3){
                 header("Location:../interface/professor/index.php");
            }
    }
    function logoff(){
        session_destroy();
        header('../interface/index.html');
    }

}



?>
