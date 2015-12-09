<?php

require_once 'Cruise.php';

class Port {

	public function __construct($code) {
		$this->code = $code;
	}

	// Adds a cruise to the port. What does this mean?
	public function addCruise(Cruise $cruise) {
		$cruise->addPort($this);

	}
}