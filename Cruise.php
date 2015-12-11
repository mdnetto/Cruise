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


	public function bookTrip(VesselTrip $trip, CabinClass $class) {

	}

	public function displayCruiseDetails() {
		//– displays information on all trips, ports and bookings for the cruise.
	}
}