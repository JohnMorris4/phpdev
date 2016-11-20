<?php
//Start Session
session_start();

//Include config.php
require('config.php');

//including all of the classes
require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

//including controllers
require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

//models
require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}

?>
