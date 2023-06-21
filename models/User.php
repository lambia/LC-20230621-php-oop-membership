<?php 

class User {
	public $name;
	public $lastname;
	protected $age;
	protected $discount = 0;

	function __construct($name = "John", $lastname = "Doe", $age = null)
	{
		$this->name = $name;
		$this->lastname = $lastname;
		$this->age = $age;
	}

	public function getFullName() {
		return $this->name . " " . $this->lastname;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge($age) {
		$this->age = $age;
	}

	public function getDiscount() {
		return $this->discount . "%";
	}

	public function setDiscount() {
		if($this->age < 30) {
			$this->discount = 20;
		} else {
			$this->discount = 0;
		}
	}

}

?>