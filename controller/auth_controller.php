<?php
require_once "DbController.php"; 
class AuthController 
{
   public function register($name,$email,$passwrod){
        
  $db= new DatabaseController;
  $db->openConnection();
  
    }

}



?>