
 You are required to complete a PHP program that implements a basic version of a CruiseShip Management System (CMS). The CMS allows a client to create and manage cruises, ports, trips, vessels, and bookings. A design class diagram of the program design is given in Figure 1. The system consists of a CruiseManager (the point of entry into the system), cruises (instances of Cruise), ports (instances of Port), trips (instances of VesselTrip), ships (instances of Vessel), cabins (instances of Cabin), and trip bookings (instances of CabinBooking). A cruise (e.g., an Alaskan cruise) is associated with a number of trips, where each trip starts on a particular date (tripDate). Each cruise visits a fixed set of ports (cruiseStops). There may be many trips for the same cruise in any given year. Each trip is assigned a ship (assignedVessel). A vessel can only make one trip per calendar year. Note that a vessel can be assigned to more than one trip: obviously a vessel cannot be assigned to more than one trip in a given year, and thus the trips assigned to a vessel must all occur in different years (assume that all trips are completed in the year they start) .

 

Figure 1. CruiseShip Management System Design Class Diagram






Below is a brief description of the operations shown in each class. 

CruiseManager 

createCruise(cruiseName:String, ports:List of Port):Cruise – creates a cruise with name cruiseName and ports referenced in the array ports. The new cruise has no vessels associated with it. The operation returns a reference to the created cruise.

createPort(portID:String):Port – creates a port with code portID and links it to the CruiseManager object. The operation returns a reference to the created port. 

createVessel(shipID, numEcon, numFamily, numPremium:Integer):Vessel - creates a vessel with vesselID given by shipID. The number of Economy, Family and Premium cabins in the vessel are given by numEcon, numFamily and numPremium respectively. The cabin numbers are assigned by the program (an example of the listing produced by this operation is given later). 

createCruiseTrip(line:Cruise, d:Date, trip: Integer, ship:Vessel):VesselTrip – creates a trip for the cruise referenced by line, with date d, tripID trip and assigned to the vessel referenced by ship. The trip is created by calling line.createTrip(). 

getAvailableCruiseTrips(line:Cruise):List of VesselTrip – returns all trips for the cruise referenced by line that have vessels with cabins that are not booked. This operation also prints a list of the number of available cabins in each cabin class for each trip in the cruise. 

bookCruise(line:Cruise, trip:VesselTrip, class:CabinClass):Cabin – books a cabin in the CabinClass, class, on the VesselTrip, trip, on the Cruise, line. If there are no available cabins of the desired class the operation returns null. If there is an available cabin of the desired class on the trip then the booking is made and the operation returns a reference to the cabin. 

displaySystemDetails() – displays information on all cruises, trips, vessels, bookings, and ports managed by the system. 

Cruise 

addPort(prt: Port) – adds the port prt to the list of ports associated with the cruise. 

createTrip(d:Date, trip: Integer, ship:Vessel):VesselTrip – creates a vessel trip and links it to the cruise. 

getAvailableTrips():List of VesselTripDetails – returns all vessel trips with number of available cabins in each cabin class. An instance of VesselTripDetails is an object consisting of four fields: Vessel Trip reference, number of available economy cabins, number of available family cabins, number of available premium cabins. 

bookTrip(trip:VesselTrip, class:CabinClass):Cabin - books a cabin in the CabinClass, class, on the VesselTrip, trip. The operation returns an available cabin in the desired class, if it exists. If no cabin of the desired class is available the operation returns null. 

displayCruiseDetails() – displays information on all trips, ports and bookings for the cruise. 
VesselTrip 

makeBooking(class:CabinClass):Cabin - books a cabin in the CabinClass, class The operation returns an available cabin in the desired class. If no cabin of the desired class is available the operation returns null. 

getNumAvailableCabins():Integer[3] – Returns the number of available cabins in economy, family and premium classes for the trip. 

displayTripDetails() – displays information on vessel and bookings made for the trip. 

Port 

addCruise(cr:Cruise) – Adds a cruise to the port. 

Vessel 

addTrip(trip:VesselTrip) – Adds the trip to the list of vessel trips assigned to the vessel. 

getNumAvailableCabins(trip:VesselTrip):Integer[3] – Returns the number of available cabins in economy, family and premium classes for the trip passed in as a parameter. 

displayVesselDetails(trip:VesselTrip) – displays information on cabins and bookings made for the trip passed in as a parameter. 

Cabin 

hasBooking(trip:VesselTrip):Boolean – Returns true if the cabin is booked for the vessel trip, trip; false otherwise.
 
getBooking(trip:VesselTrip):CabinBooking – Returns the cabin booking for a trip. If there is no booking for the cabin on the specified trip then the operation returns null. 

displayCabinDetails(trip:VesselTrip) – displays information on bookings made for cabin for the trip passed in as a parameter.









Output Formats 

The following is the required format of the output produced by displaySystemDetails(). 

Cruise name 
Ports List: port 1, port 2, … 
Vessel Trip id; mm/dd/yyyy 
Vessel num 
Cabin num; class; booked/available 
Cabin num; class; booked/available 
… 
Vessel Trip id; mm/dd/yyyy
Vessel num 
Cabin num; class; booked/available 
Cabin num; class; booked/available 
… 
… 
Cruise name 
Ports List: port 1, port 2, … 
Vessel Trip id; mm/dd/yyyy 
Vessel num 
Cabin num; class; booked/available 
Cabin num; class; booked/available 
… 
Vessel Trip id; mm/dd/yyyy 
Vessel num 
Cabin num; class; booked/available 
Cabin num; class; booked/available 
… 
… 
... 






















Example Output from displaySystemDetails() 

CARIB 
Ports List: KIN, THOM, CAST 
111; 11/1/2011 
1 
1; Economy; booked 
2; Economy; available 
3; Economy; available 
112; 11/1/2012 
1 
1; Economy; available 
2; Economy; available 
3; Economy; available 
110; 12/1/2011 
2 
1; Economy; booked 
2; Economy; booked 
3; Economy; booked 
4; Family; booked 
5; Family; booked 
6; Premium; booked 
... 
116; 1/1/2011 
3 
1; Family; booked 
2; Family; available 
3; Family; booked
4; Family; available 
5; Family; available 
6; Premium; booked 
7; Premium; booked 
8; Premium; booked 
... 
ALASK 
Ports List: SEA, ANCH 
211; 5/1/2013 
1 
1; Economy; booked 
2; Economy; booked 
3; Economy; available 
212; 6/1/2011 
4 
1; Economy; available 
2; Family; available 
3; Family; available 
… 
…







Example output from getAvailableCruiseTrips() 

ALASK 211; 5/1/2013 
1 
Available Economy Cabins: 1 
Available Family Cabins: 0 
Available Premium Cabins: 0 
212; 6/12/2011 
4 
Available Economy Cabins: 0 
Available Family Cabins: 0 
Available Premium Cabins: 0

