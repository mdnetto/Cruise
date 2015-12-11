<?php

// require_once 'ShipTripDetails.php';

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
		//:Integer[3] – Returns the number of available cabins in economy,
		//family and premium classes for the trip passed in as a parameter.
	}

	public function displayShipDetails(ShipTrip $trip) {
		// – displays information on cabins and bookings made for the trip
		//passed in as a parameter.
	}
}