<?php

require_once "person.php";

class Admin extends Person
{
   static  private $admin;
   private $fullName;
	/**
	 * 
	 * @return mixed
	 */
	function getFullName() {
		return $this->fullName;
	}
	
	/**
	 * 
	 * @param mixed $fullName 
	 * @return Admin
	 */
	function setFullName($fullName): self {
		$this->fullName = $fullName;
		return $this;
	}
    
	/**
	 * @param $fullName mixed 
	 */
	private function __construct($fullName) {
	    $this->fullName = $fullName;
	}
    public function getInstance($fullName) {
        if($this->admin==null)
	   $admin= $this->__construct($fullName);
       return $admin;
	}
}
?>