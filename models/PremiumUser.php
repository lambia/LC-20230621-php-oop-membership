<?php 

class PremiumUser extends User {

	private $membership = false;

	function __construct($name = "John", $lastname = "Doe", $age = null, $membership = false)
	{
		// Richiama il costruttore della classe padre "User" e gli passa i tre argomenti necessari
		// parent::__construct($name, $lastname, $age);

		//Assegna le tre proprietà, senza chiamare il costruttore di User (versione alternative)
		$this->name = $name;
		$this->lastname = $lastname;
		$this->age = $age;

		//Infine, assegna la membership, ha senso solo per i PremiumUser
		$this->membership = $membership;
	}

	public function getMembership() {
		return $this->membership;
	}

	public function setMembership($membership) {
		$this->membership = $membership;
	}

	public function setDiscount() {
		$this->discount = 30;
	}

}

?>