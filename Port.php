<?php

class Port {

	public function __construct($code) {
		$this->code = $code;
	}

	// Adds a cruise to the port. What does this mean?
	// push to an array?
	public function addCruise(Cruise $cruise) {
		$cruise->addPort($this);
		//$cruises = array_push($this->cruises, $cruise);
		// how do get the cruises on the $port obj?
	}
}