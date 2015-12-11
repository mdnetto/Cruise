<?php

require_once 'Cruise.php';
require_once 'Vessel.php';
require_once 'Port.php';


class CruiseManager {

    public function createCruise($cruiseName, array $ports) {
        return new Cruise($cruiseName,  $ports);
    }

    public function createPort($portID) {
        return new Port($portID);
    }

    public function createVessel($shipID, $numEcon, $numFamily, $numPremium) {
        return new Vessel($shipID, $numEcon, $numFamily, $numPremium);
        // Vessel - creates a vessel with vesselID given by shipID. The number
        // of Economy, Family and Premium cabins in the vessel are given by
        // numEcon, numFamily and numPremium respectively. The cabin numbers are
        // assigned by the program (an example of the listing produced by this
        // operation is given later).
    }

    public function createCruiseTrip(Cruise $line, $date, $tripID, Vessel $ship) {
        return $line->createTrip($date, $tripID, $ship);
        // creates a trip for the cruise referenced by line, with date d, tripID
        // trip and assigned to the vessel referenced by ship. The trip is created by
        // calling line.createTrip().
    }

    public function getAvailableCruiseTrips(Cruise $line) {
        return $line->getAvailableTrips();
        // returns all trips for the cruise referenced
        // by line that have vessels with cabins that are not booked.
        // This operation also prints a list of the number of available cabins
        // in each cabin class for each trip in the cruise.
    }

    public function bookCruise(Cruise $line, VesselTrip $trip, CabinClass $class) {
        // books a cabin in the CabinClass, class, on the VesselTrip, trip, on
        // the Cruise, line. If there are no available cabins of the desired
        // class the operation returns null. If there is an available cabin of
        // the desired class on the trip then the booking is made and the operation
        // returns a reference to the cabin.
    }

    public function displaySystemDetails(Cruise $c, Vessel $v) {
        // displays information on all cruises, trips, vessels, bookings, and ports
        // managed by the system.
        echo "
        <h3>Cruise Name: $c->cruiseName</h3>
        <p>Ports: ";
        foreach ($c->ports as $port) {
            echo $port->code . ', ';
        }
        echo "</p>
        ";

        foreach ($v->trips as $t) {
            echo "<p>Vessel Trip ID: $t->tripID, $t->tripDate</p>
            <p>Vessel Num: $v->shipID</p>
            <p>Cabin Num:<p> class; booked:  available: </p>
            <p>Cabin Num: class:  booked:  available:</p>
            --------
            ";
        }
    }
}
