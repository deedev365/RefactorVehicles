<?php

$vehicleTypes = ['sport-car', 'truck', 'bike', 'boat'];
$vehiclesSpeed = [150, 60, 100, 50]; // vehicles speed in km/h
$distance = 350; // destination distance in km

print("Duration of each vehicle to reach destination\n");

for ($i=0;$i< count($vehicleTypes) ; $i++) {
  if ($vehicleTypes[$i] == 'boat') {
    // The boat needs extra 15 min to get ready, so we add + 0.25H
    print($vehicleTypes[$i] . ": ". ($distance/$vehiclesSpeed[$i]) + 0.25);
  } else {
    print($vehicleTypes[$i] . ": ". $distance/$vehiclesSpeed[$i]);
  }
}
