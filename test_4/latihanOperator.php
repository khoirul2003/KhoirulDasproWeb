<?php 

$totalSeats = 45;
$occupiedSeats = 28;
$emptySeats = $totalSeats - $occupiedSeats;
$emptySeatsPercentage = ($emptySeats / $totalSeats) * 100;

echo "Total seats   : $totalSeats<br>";
echo "Occupied seats: $occupiedSeats<br>";
echo "Empty seats   : $emptySeats<br>";
echo "Percentage of empty seats: " . number_format($emptySeatsPercentage, 2) . "%<br>";

?>