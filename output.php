<?php

require_once 'CruiseManager.php';
require_once 'Cabin.php';

$i = 0;

$cruise_manager = new CruiseManager();

$carib_cruise_name = 'CARIB';
$date1 = '01/12/2016';
$date2 = '01/12/2017';

$carib_ports = array(
	$cruise_manager->createPort('Barbados'),
	$cruise_manager->createPort('Havana'),
	$cruise_manager->createPort('San Juan'));

$carib_ship = $cruise_manager->createShip(1, 120, 100, 80);

$cruise1 = $cruise_manager->createCruise(01, $carib_cruise_name, $carib_ports, $date1, $carib_ship);
$cruise2 = $cruise_manager->createCruise(02, $carib_cruise_name, $carib_ports, $date2, $carib_ship);

$class = Cabin::FAMILY;
$family_cabin = new Cabin($class);

for ($i; $i<100; $i++) {
	$booking = $cruise_manager->bookCruise($cruise1, $family_cabin);
}

$new_port1 = $cruise_manager->createPort('St Martin');
$new_port1->addCruise($cruise1);

$alask_cruise_name = 'ALASK';
$alask_ports = array(
	$cruise_manager->createPort('Glacier Bay'),
	$cruise_manager->createPort('Juneau'),
	$cruise_manager->createPort('Ketchikan'),
	$cruise_manager->createPort('Sitka'),
	$cruise_manager->createPort('Vancouver'));
$alask_ship = $cruise_manager->createShip(2, 400, 200, 100);

$cruise3 = $cruise_manager->createCruise(03, $alask_cruise_name, $alask_ports, $date1, $alask_ship);
$cruise4 = $cruise_manager->createCruise(04, $alask_cruise_name, $alask_ports, $date1, $alask_ship);

$new_port2 = $cruise_manager->createPort('Saskatoon');
$new_port2->addCruise($cruise4);

$cruises = [$cruise1, $cruise2, $cruise3, $cruise4];
$cruise_manager->displaySystemDetails($cruises);
