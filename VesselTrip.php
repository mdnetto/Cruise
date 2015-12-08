<?php

class VesselTrip {

	public $tripID;
	public $tripDate;

	public function __construct($tripID, $tripDate) {
		$this->tripID = $tripID;
		$this->tripDate = $tripDate;
	}

	public function makeBooking(CabinClass $class) {
		// :Cabin - books a cabin in the CabinClass, class The operation
		// returns an available cabin in the desired class. If no cabin
		// of the desired class is available the operation returns null.
	}

	public function getNumAvailableCabins() {
		//return $
		// :Integer[3] – Returns the number of available cabins in economy,
		// family and premium classes for the trip.
	}

	public function displayTripDetails() {
		// displays information on vessel and bookings made for the trip.
	}

}