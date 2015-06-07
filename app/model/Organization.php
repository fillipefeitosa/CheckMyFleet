<?php

/*
 * File: Organization.php
 * Purpose: Create Organization Model
 */
  class Organization{
    private $organizationID;
    private $organizationName;
    private $organizationDescription;
    private $organizationFleetSize;

    function set($prop, $value){
         $this->$prop = $value;
    }
    function get($prop){
        return $this->$prop;
    }
  }
