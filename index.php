<?php
require_once'./Controlles/Controllerfeedback.php';

// Create var $intAction to save GET method
$intAction = '';

// Checking method GET
if(isset($_GET['action'])){

  // Saving value
  $intAction = $_GET['action'];
}

$objfeedback = new ControllerFeedback();
$objfeedback->executar($intAction);
?>
