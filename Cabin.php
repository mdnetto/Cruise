<?php

class Cabin {

	public $cabinNum; // int
	public $section; //'ECONOMY, FAMILY, PREMIUM';


	public function hasBooking(VesselTrip $trip) {
		//:Boolean – Returns true if the cabin is booked for the vessel trip,
		// trip; false otherwise.
	}


	public function getBooking(VesselTrip $trip) {
		//:CabinBooking – Returns the cabin booking for a trip.
		//If there is no booking for the cabin on the specified trip then the
		//operation returns null.
	}

	public function displayCabinDetails(VesselTrip $trip) {
		//– displays information on bookings made for cabin for
		//the trip passed in as a parameter.
	}
}


