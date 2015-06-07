<?php

/**
 * Description of RestrictAcess
 * Classe para manipulação de acessos. Deve ser instanciada logo no começo do
 * arquivo.
 * Todas as páginas de usários logados devem seguir o modelo
 * a seguir:
    <?php
    include_once("../../controller/RestrictAccess.php");
    $objAcesso = new AcessoRestrito;
    $objAcesso->iniciaSessao();
    $objAcesso->verificaAcesso();
    ?>
 * @author Fillipe
 */
class RestrictAccess {

    function iniciaSessao(){
        if (!isset($_SESSION)) session_start();
    }
    function verificaAcesso(){
        if (!(isset($_SESSION['userID']) && $_SESSION['userID']!='')) {
          // Destrói a sessão por segurança

            $this->logoff();
            exit();
        }

    }

    function logoff(){
        session_destroy();
        header('location:../view/loginform.php');
    }

}

?>
