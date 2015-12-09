<?php

require_once 'CruiseManager.php';
require_once 'VesselTrip.php';

class Cruise extends CruiseManager {

	public $cruiseName; // CARIB, EURO, MED, ALASK
	public $ports = array();

	public function __construct($cruiseName, array $ports) {
	 	$this->cruiseName = $cruiseName;
	 	$this->ports = $ports;
	}

	// adds the port prt to the list of ports associated with the cruise
	public function addPort(Port $port){
		$ports = array_push($this->ports, $port);
	}

	// creates a vessel trip and links it to the cruise
	public function createTrip($date, $tripID, Vessel $ship) {
		$trip = new VesselTrip($tripID, $date);
		$ship->addTrip($trip);
		return $trip;
	}

	public function getAvailableTrips(Cruise $line) {
		var_dump($line);
		//$trips = $line->
		//getNumAvailableCabins($trip);

		//List of VesselTripDetails – returns all vessel trips with number of available
		//cabins in each cabin class. An instance of VesselTripDetails is an
		//object consisting of four fields: Vessel Trip reference, number of available
		//economy cabins, number of available family cabins, number of available premium cabins.
	}

	public function bookTrip(VesselTrip $trip, CabinClass $class) {
		// :Cabin - books a cabin in the CabinClass, class, on the VesselTrip, trip. The operation
		// returns an available cabin in the desired class, if it exists. If no cabin of the desired
		// class is available the operation returns null.
	}

	public function displayCruiseDetails() {
		//– displays information on all trips, ports and bookings for the cruise.
	}
}