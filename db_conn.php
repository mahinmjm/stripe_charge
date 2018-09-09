<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

class User extends Illuminate\Database\Eloquent\Model {}
class Business extends Illuminate\Database\Eloquent\Model {
    protected $table = 'business';
    protected $fillable = ['name', 'enabled', 'delivery_time', 'pickup_time', 'currency', 'stripe_id', 'ordering_id', 'json_data'];
}

class Driver extends Illuminate\Database\Eloquent\Model {
    protected $table = 'drivers';
    protected $fillable = ['first_name', 'last_name', 'email', 'mobile', 'address', 'enabled', 'stripe_id', 'business_id', 'ordering_id', 'json_data'];
}

class Language extends Illuminate\Database\Eloquent\Model {
    protected $table = 'language';
    protected $fillable = ['id', 'title', 'short_code', 'enabled', 'default_lang'];
}

class Order extends Illuminate\Database\Eloquent\Model {
    protected $table = 'orders';
    protected $fillable = ['driver_id', 'ordering_id', 'business_id', 'stripe_result', 'status_id', 'total', 'date', 'order_data', 'json_data'];
}

class Cron extends Illuminate\Database\Eloquent\Model {
    protected $table = 'crons';
    protected $fillable = ['ordering_id', 'driver_id', 'date', 'status_id', 'business_id', 'total', 'discount', 'stripe_result'];
}


$capsule = new Capsule;



$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'stripe',
    'username'  => 'robin',
    'password'  => 'robin',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();

// Setup the Eloquent ORM
$capsule->bootEloquent();


function pr($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}