<?php
/*
 * File: User.php
 * Purpose: Create User Model
 */

class User {
    protected $userID;
    protected $userLogin;
    protected $userPassword;
    protected $userIsAdmin = 0;
    //protected Organization userOrganization;


    function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    }
}

?>
