<?php
require_once 'vendor/autoload.php';
use App\classes\frontend\Home;
use App\classes\admin\Admin;

//Frontend Part

//$home= new Home();
//$home->index();



//Backend part

$admin = new Admin();
$admin->index();