<?php 
class DatabaseController 
{

    private $localhost="localhost";
    private $user="root";
    private $pass="";
    
   public $connection;
   function openConnection(){
     $connection=  mysqli_connect($this->localhost,$this->user,$this->pass);
   }
  function getallUsers(){

   }
   function createPerson(){

   }
   function createAdmin(){

   }
   function createDoctor(){

   }
   
}



?>