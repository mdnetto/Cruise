<?php


class Ship {

	public function __construct($shipID, $numEcon, $numFamily, $numPremium) {
		$this->shipID = $shipID;
		$this->numEcon = $numEcon;
		$this->numFamily = $numFamily;
		$this->numPremium = $numPremium;
        $this->trips = array();
	}

	public function addTrip(ShipTrip $trip) {
		return array_push($this->trips, $trip);
	}

	public function getNumAvailableCabins(ShipTrip $trip) {

	}

	public function displayShipDetails(ShipTrip $trip) {

	}
}