<?php

require_once "person.php";
class Doctor extends Person
{
   private $firstName;
   private $lastName;
   private $id;
   private $city;
   private $country;
    private $area;
   private $stname;
   private $hospital;
   private $speciality;
   private $rate;
   private $views;
   private $dsecription;
	/**
	 * 
	 * @return mixed
	 */
	function getFirstName() {
		return $this->firstName;
	}
	
	/**
	 * 
	 * @param mixed $firstName 
	 * @return Doctor
	 */
	function setFirstName($firstName): self {
		$this->firstName = $firstName;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getLastName() {
		return $this->lastName;
	}
	
	/**
	 * 
	 * @param mixed $lastName 
	 * @return Doctor
	 */
	function setLastName($lastName): self {
		$this->lastName = $lastName;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getId() {
		return $this->id;
	}
	
	/**
	 * 
	 * @param mixed $id 
	 * @return Doctor
	 */
	function setId($id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getCity() {
		return $this->city;
	}
	
	/**
	 * 
	 * @param mixed $city 
	 * @return Doctor
	 */
	function setCity($city): self {
		$this->city = $city;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getCountry() {
		return $this->country;
	}
	
	/**
	 * 
	 * @param mixed $country 
	 * @return Doctor
	 */
	function setCountry($country): self {
		$this->country = $country;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getArea() {
		return $this->area;
	}
	
	/**
	 * 
	 * @param mixed $area 
	 * @return Doctor
	 */
	function setArea($area): self {
		$this->area = $area;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getStname() {
		return $this->stname;
	}
	
	/**
	 * 
	 * @param mixed $stname 
	 * @return Doctor
	 */
	function setStname($stname): self {
		$this->stname = $stname;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getHospital() {
		return $this->hospital;
	}
	
	/**
	 * 
	 * @param mixed $hospital 
	 * @return Doctor
	 */
	function setHospital($hospital): self {
		$this->hospital = $hospital;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getSpeciality() {
		return $this->speciality;
	}
	
	/**
	 * 
	 * @param mixed $speciality 
	 * @return Doctor
	 */
	function setSpeciality($speciality): self {
		$this->speciality = $speciality;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getRate() {
		return $this->rate;
	}
	
	/**
	 * 
	 * @param mixed $rate 
	 * @return Doctor
	 */
	function setRate($rate): self {
		$this->rate = $rate;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getViews() {
		return $this->views;
	}
	
	/**
	 * 
	 * @param mixed $views 
	 * @return Doctor
	 */
	function setViews($views): self {
		$this->views = $views;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getDsecription() {
		return $this->dsecription;
	}
	
	/**
	 * 
	 * @param mixed $dsecription 
	 * @return Doctor
	 */
	function setDsecription($dsecription): self {
		$this->dsecription = $dsecription;
		return $this;
	}
}
?>