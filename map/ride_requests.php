<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $source = $_POST['source'];
    $destination = $_POST['destination'];

    $data = json_decode(file_get_contents("ride_requests.json"), true);
    $data[] = ["source" => $source, "destination" => $destination];
    file_put_contents("ride_requests.json", json_encode($data));

    echo "Ride request received.";
}
?>
