<?php

require_once('./db_conn.php');

use Illuminate\Database\Capsule\Manager as DB;


$data = json_decode(file_get_contents("php://input"), true);



$orderData = array();
$orderItem = json_decode($data['data'], true);

if($data['status'] == 11){
    $cronData = array();
    $cronData['total'] = $orderItem['total'];
    $cronData['business_id'] = $orderItem['business'][0]['id'];
    $cronData['discount'] = $orderItem['discountprice'];
    $cronData['date'] = $data['date'];
    $cronData['ordering_id'] = $data['id'];
    $cronData['driver_id'] = $data['driverId'];
    $cronData['stripe_result'] = $data['stripeResult'];
    Cron::firstOrCreate($cronData);
}

$orderData['date'] = $data['date'];
$orderData['ordering_id'] = $data['id'];
$orderData['driver_id'] = $data['driverId'];
$orderData['status_id'] = $data['status'];
$orderData['total'] = $orderItem['total'];
$orderData['business_id'] = $orderItem['business'][0]['id'];
$orderData['json_data'] = json_encode($data);
Order::firstOrCreate($orderData);


echo 'done !';

