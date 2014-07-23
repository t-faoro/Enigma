<?php 
//error_reporting(E_ALL);
include('config.php');

//$Enigma = new EnigmaApplication();
$EnigmaTemplates = new EnigmaTemplates();

$EnigmaTemplates->setWidget('logoPosition', 'logo');
$EnigmaTemplates->setWidget('sidebarPosition', 'helloWorld');
$EnigmaTemplates->show();



?>