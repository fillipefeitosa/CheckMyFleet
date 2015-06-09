<?php

/**
 * File: ConectionDB.php
 * Purpose: Esta classe serve de modelo para as interacoes com banco do sistema
 * procurar por metodos de get e set
 *
 * @author Fillipe
 */
class ConectionDB {
    private $host = 'localhost';
    private $user = 'check';
    private $pass = 'check';
    private $db = 'check';
    private $sql;
    private $con;
    function conectar(){
        if($this->con == NULL){
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        }
        return $this->con;
    }
    function selecionarDB(){
        $sel = mysqli_select_db($this->db) or die($this->erro(mysqli_error()));
        if($sel){
            return true;
        }else{
            return FALSE;
        }
     }
     function consulta(){
         $consulta = mysqli_query($this->sql) or die ($this->erro(mysqli_error()));
         return $consulta;
     }
     function set($prop, $value){
         $this->$prop = $value;
     }
     function getSQL(){
         return $this->sql;
     }
     function erro($erro){
         echo $erro;
     }
     function encerraConexao(){
         mysqli_close($this->con);
     }
}


?>
