<?php
class Person{
    private $id;
    private $email;
    private $gender;
    private $password;
    private $birthDate;
    private $phoneNumber;
    function __construct($id, $gender, $password, $birthDate, $phoneNumber)
    {
        $this->id = $id;
        $this->gender = $gender;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->phoneNumber = $phoneNumber;
    }
    public function  getEmail()
    {
        return $this->email;
        # code...
    }
    public function  getPassword()
    {
        return $this->password;
        # code...
    }
    public function  getBirthDate()
    {
        return $this->birthDate;
        # code...
    }
    public function  getPhoneNumber()
    {
        return $this->phoneNumber;
        # code...
    }
    public function  getId()
    {
        return $this->id;
        # code...
    }
    public function  getGender()
    {
        return $this->gender;
        # code...
    }
    public function  setPassword($password)
    {
     $this->password=$password;
        # code...
    }
    public function  setId($id)
    {
     $this->id=$id;
        # code...
    }
    public function  setGender($gender)
    {
     $this->gender=$gender;
        # code...
    }
    public function  setEmail($email)
    {
     $this->email=$email;
        # code...
    }
    public function  setBirthDate($birthDate)
    {
     $this->birthDate=$birthDate;
        # code...
    }
    public function  setPhoneNumber($phoneNumber)
    {
     $this->phoneNumber=$phoneNumber;
        # code...
    }
    public function login(String $email,String $password)
    {
        
        # code...
    }
    public function logout()
    {
        
        # code...
    }
}


?>
//Sign-up,Sign IN