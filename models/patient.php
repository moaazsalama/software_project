<?php 
require_once 'person.php';
class Patient extends Person{
   private $fullName;
   private $id;
   private $address;
//    public function __construct($fullName,$id,$address,$personId, $gender, $password, $birthDate, $phoneNumber) {
//        $this->fullName=$fullName;
//        $this->id=$id;
//        $this->address=$address;
        
//    }
   

   /**
    * Get the value of fullName
    */ 
   public function getFullName()
   {
      return $this->fullName;
   }

   /**
    * Set the value of fullName
    *
    * @return  self
    */ 
   public function setFullName($fullName)
   {
      $this->fullName = $fullName;

      return $this;
   }

   /**
    * Get the value of id
    */ 
   public function getId()
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @return  self
    */ 
   public function setId($id)
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of address
    */ 
   public function getAddress()
   {
      return $this->address;
   }

   /**
    * Set the value of address
    *
    * @return  self
    */ 
   public function setAddress($address)
   {
      $this->address = $address;

      return $this;
   }
	/**
	 * @param $fullName mixed 
	 * @param $id mixed 
	 * @param $address mixed 
	 */
	function __construct($fullName, $id, $address) {
	    $this->fullName = $fullName;
	    $this->id = $id;
	    $this->address = $address;
	}
}


?>