<?php

  $page = $_GET['id'];
  $path = "modules/$page" . ".php";

  function loadContent($page, $path){
    if($page == ""){
      $path = "modules/welcome.php";
    }

    include_once($path);
  }

?>
