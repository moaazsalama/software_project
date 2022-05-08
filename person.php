<?php 
class Person {
   private $id;
   private $email;
   private $gender;
   private $password;
   private $birthDate;
   private $phoneNumber;
   Person(this->$id , $email,){
       
   }
    public function  getEmail()
    {
        return $email;
        # code...
    }public function  getPassword()
    {
        return $password;
        # code...
    }
    public function  getBirthDate()
    {
        return $birthDate;
        # code...
    }public function  getPhoneNumber()
    {
        return $phoneNumber;
        # code...
    }
}

class Patient extends Person{
}

?>
//Sign-up,Sign IN