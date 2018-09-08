<?php
$entityBody = file_get_contents('php://input');
print_r(json_decode($entityBody)->result->orderList);
?>