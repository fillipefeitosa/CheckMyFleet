<?
include "class.logsys.php";
/**
 * This configuration is for Subin's Blog Demos page
 * running on RedHat's OpenShift server
 */

$objConfig = new LS();
echo "teste" . $objConfig;
\Fr\LS::$config = array(
  "info" => array(
    "company" => "CheckMyFleet",
    "email" => "fillfeitosa@gmail.com"
  ),
  "db" => array(
    "host" => "localhost",
    "port" => 3306,
    "username" => "check",
    "password" => "check",
    "name" => "check",
    "table" => "User"
  ),
  "keys" => array(
    "cookie" => "myCookieKey",
    "salt" => "MySaltKey"
  ),
  "features" => array(
    "auto_init" => true
  ),
  "pages" => array(
    "no_login" => array(
      "/php/loginSystem/",
      "/php/loginSystem/reset.php",
      "/php/loginSystem/register.php"
    ),
    "login_page" => "/php/loginSystem/login.php",
    "home_page" => "/php/loginSystem/home.php"
  )
);
?>
