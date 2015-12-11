<?php


class ShipTripDetails extends ShipTrip {

	public $availEcon; //int
	public $availFamily; //int
	public $availPremium; //int

	public function __construct($tripID, $availEcon, $availFamily, $availPremium) {
		$this->tripID = $tripID;
		$this->$availEcon = $availEcon;
		$this->$availFamily = $availFamily;
		$this->$availPremium = $availPremium;
	}
}
