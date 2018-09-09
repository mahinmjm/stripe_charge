<?php

require_once('./db_conn.php');

$data = json_decode(file_get_contents("php://input"), true);

// Retrieve and Save business Data
/*foreach ($data as $key => $value){
    $bsData = array();
    $bsData['delivery_time'] = $value['deliveryTime'];
    $bsData['pickup_time'] = $value['pickupTime'];
    $bsData['currency'] = $value['currency'];
    $bsData['ordering_id'] = $value['id'];
    $bsData['name'] = $value['name'];
    $bsData['enabled'] = $value['enabled'];
    $bsData['json_data'] = json_encode($value);
    Business::create($bsData);
}*/


// Retrieve and Save Driver Data
/*foreach ($data as $key => $value){
    $drData = array();
    $drData['ordering_id'] = $value['id'];
    $drData['first_name'] = $value['name'];
    $drData['last_name'] = $value['last_name'];
    $drData['email'] = $value['email'];
    $drData['mobile'] = $value['mobile'];
    $drData['address'] = $value['address'];
    $drData['enabled'] = $value['enabled'];
    $drData['json_data'] = json_encode($value);
    Driver::create($drData);
}*/


// Retrieve and Save language Data
/*foreach ($data as $key => $value){
    $langData = array();
    $langData['id'] = $value['id'];
    $langData['title'] = $value['langText'];
    $langData['short_code'] = $value['langShortCode'];
    $langData['enabled'] = $value['enabled'];
    $langData['default_lang'] = $value['opdefault'];
    Language::create($langData);
}*/

// Retrieve and Save Order Data
/*foreach ($data as $key => $value){
    $orderData = array();
    $orderItem = json_decode($value['data'], true);
    $orderData['date'] = $value['date'];
    $orderData['ordering_id'] = $value['id'];
    $orderData['driver_id'] = $value['driverId'];
    $orderData['status_id'] = $value['status'];
//    $orderData['total'] = $orderItem[0]['Total'];
//    $orderData['order_data'] = $orderItem[0]['business'];
    $orderData['json_data'] = json_encode($value);
    Order::firstOrCreate($orderData);

}*/

// Find and Match With Existing Order from Recent Order
foreach ($data as $key => $value){
//    $foundOrder = Order::where('ordering_id', $value['order_number'])->get();
}

echo 'done';
//print_r($data);

