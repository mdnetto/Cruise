<?php

require_once 'CruiseManager.php';

class Cruise {

	public $bookedEcon = 0;
	public $bookedFamily = 0;
	public $bookedPremium = 0;

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

	public function getAvailableTrips($cruises) {
		foreach ($cruises as $cruise) {
		}

		var_dump($availEcon | $availPremium | $availFamily);
	}

	public function bookTrip(Cruise $cruise, Cabin $class) {
		$ship = $cruise->ship;
		$bookedFamily = $cruise->bookedFamily;

		if ($class == Cabin::ECONOMY) {
			$cruise->bookedEcon = $cruise->bookedEcon + 1;
		} elseif ($class == Cabin::PREMIUM) {
			$cruise->bookedPremium = $cruise->bookedPremium + 1;
		} else {
			$cruise->bookedFamily = $cruise->bookedFamily + 1;
		}
	}

	public function displayCruiseDetails($cruises) {
		foreach ($cruises as $cruise) {

			echo "
			<p>
	        	<strong>Cruise: $cruise->cruiseID $cruise->cruiseName</strong>
	        </p>
	        <p>Ports: ";
	        foreach ($cruise->ports as $port) {
	            echo $port->code . ', ';
	        }

	        $ship = $cruise->ship;
	        $total_cabins = $ship->numEcon + $ship->numFamily + $ship->numPremium;
	        $availableEcon = $ship->numEcon - $cruise->bookedEcon;
	        $availableFamily = $ship->numFamily - $cruise->bookedFamily;
	        $availablePremium = $ship->numPremium - $cruise->bookedPremium;

	        echo "
	        <p>Date: $cruise->date</p>
	        <p>Ship $ship->shipID Total Cabins $total_cabins <br>
	        	<strong>Economy </strong> booked: $cruise->bookedEcon available: $availableEcon total: $ship->numEcon<br>
	        	<strong>Family </strong> booked: $cruise->bookedFamily available: $availableFamily total: $ship->numFamily<br>
	        	<strong>Premium </strong> booked: $cruise->bookedPremium available: $availablePremium total: $ship->numPremium<br>
	        </p>
	        =======================================";
		}
	}
}
