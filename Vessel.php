<?php

require_once 'VesselTripDetails.php';

class Vessel {

	public function __construct($shipID, $numEcon, $numFamily, $numPremium) {
		$this->shipID = $shipID;
		$this->numEcon = $numEcon;
		$this->numFamily = $numFamily;
		$this->numPremium = $numPremium;
        $this->trips = array();
	}

	public function addTrip(VesselTrip $trip) {
		$trips = array_push($this->trips, $trip);
		// – Adds the trip to the list of vessel trips assigned to the vessel.
	}

	public function getNumAvailableCabins(VesselTrip $trip) {
		//:Integer[3] – Returns the number of available cabins in economy,
		//family and premium classes for the trip passed in as a parameter.
	}

	public function displayVesselDetails(VesselTrip $trip) {
		// – displays information on cabins and bookings made for the trip
		//passed in as a parameter.
	}
}