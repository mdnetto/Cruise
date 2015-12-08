<?php

require_once 'CruiseManager.php';

$cm1 = new CruiseManager();

$cruiseName1 = 'CARIB';
$date1 = '01/12/2016'; //mm/dd/yyy
$date2 = '01/12/2017';
$ports1 = array(
	$cm1->createPort('Barbados'),
	$cm1->createPort('Havana'),
	$cm1->createPort('San Juan'));

$new_port = $cm1->createPort('St Martin');

$c1 = $cm1->createCruise($cruiseName1, $ports1);

$new_port->addCruise($c1);

$v1 = $cm1->createVessel(1, 120, 100, 80);

$t1 = $cm1->createCruiseTrip($c1, $date1, 1, $v1);
$t2 = $cm1->createCruiseTrip($c1, $date2, 2, $v1);

$cm1->displaySystemDetails($c1, $v1);
$cm1->getAvailableCruiseTrips($c1); //returns $t1 and $t2 if they have free cabins


$cm2 = new CruiseManager();

$cruiseName2 = 'ALASK';
$ports2 = array(
	$cm2->createPort('Glacier Bay'),
	$cm2->createPort('Juneau'),
	$cm2->createPort('Ketchikan'),
	$cm2->createPort('Sitka'),
	$cm2->createPort('Vancouver'));

$c2 = $cm2->createCruise($cruiseName2, $ports2);
$v2 = $cm2->createVessel(2, 400, 200, 100);
$t1 = $cm1->createCruiseTrip($c2, $date1, 1, $v2);
$t2 = $cm1->createCruiseTrip($c2, $date2, 2, $v2);
$cm2->displaySystemDetails($c2, $v2);

//cm = cruiseManager
//c = cruise
//v = vessel
//t = trip