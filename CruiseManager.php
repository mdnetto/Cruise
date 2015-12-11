<?php

require_once 'Cruise.php';
require_once 'Ship.php';
require_once 'Port.php';
require_once 'Cabin.php';

class CruiseManager {

    public function createCruise($cruiseID, $cruiseName, array $ports, $date, $ship) {
        return new Cruise($cruiseID, $cruiseName, $ports, $date, $ship);
    }

    public function createPort($portID) {
        return new Port($portID);
    }

    public function createShip($shipID, $numEcon, $numFamily, $numPremium) {
        return new Ship($shipID, $numEcon, $numFamily, $numPremium);
    }

    public function createCruiseTrip(Cruise $cruise, $date, $tripID, Vessel $ship) {
        return $cruise->createTrip($date, $tripID, $ship);
    }

    public function getAvailableCruiseTrips(Cruise $cruise) {
        return $cruise->getAvailableTrips();
    }

    public function bookCruise($cruiseID, cabin $class) {
        return Cruise::bookTrip($cruiseID, $class);
    }

    public function displaySystemDetails(array $cruises) {
        $cruises = Cruise::displayCruiseDetails($cruises);

    }
}
