<?php

require_once 'CruiseManager.php';

class Cruise {

	public function __construct($cruiseID, $cruiseName, array $ports, $date, $ship) {
	 	$this->cruiseID = $cruiseID;
	 	$this->cruiseName = $cruiseName;
	 	$this->ports = $ports;
	 	$this->date = $date;
	 	$this->ship = $ship;
	}

	public function addPort(Port $port){
		$ports = array_push($this->ports, $port);
	}

	public function getAvailableTrips() {
	}

	public function bookTrip($cruiseID, CabinClass $class) {
	}

	public function displayCruiseDetails($cruises) {

	foreach ($cruises as $cruise) {

		echo "
		<p>
        	<strong>Cruise: $cruise->cruiseName $cruise->cruiseID</strong>
        </p>
        <p>Ports: ";
        foreach ($cruise->ports as $port) {
            echo $port->code . ', ';
        }
        $ship = $cruise->ship;
        echo "
        <p>Date: $cruise->date</p>
        <p>Ship: $ship->shipID</p>
        </p>
        =======================================";
	}
	}
}
