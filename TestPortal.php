<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 17/11/2016
 * Time: 11:46 AM
 */
require_once 'vendor/autoload.php';
require_once 'Portal.php';

use Sunat\Portal;
$portal = new Portal();
//echo "Starting...<br/>";
$array = $portal->Login("10123456781","USUERIOSOL","CLAVESOL");
$urlfinal= $array[0];

//abrira el portal sunat sin necesidad de hacer login
header("Location: " . $urlfinal);
