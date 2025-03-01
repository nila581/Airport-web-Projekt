<?php

session_start();

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . "repository/userRepository.php";
$link = "../css/Dashboard.css";

$db = new Database();
$ur = new userRepository();



if($_SESSION['user']['role']==='Admin')  {

  $UserCount = $db->query("Select count(*) as Users From user")->fetch();
  $ArrivalsCount = $db->query("Select count(*) as Arrivals From arrivals")->fetch();
  $DeparturesCount= $db->query("Select count(*) as Departures From departures")->fetch();
  $SuggestionsCount = $db->query("Select count(*) as Suggestions From contactus")->fetch();
  $ParkingsCount = $db->query("Select count(*) as Parkings From parking")->fetch();

  $users=$ur->getAllUsers();
  $arrivals = $db ->query('Select * from arrivals')->fetchAll();
  $departures = $db->query('Select * from departures')->fetchAll();
  $suggestions = $db->query('Select * from contactus')->fetchAll();
  $parkings = $db->query('Select * from parking')->fetchAll();

  require BASE_PATH . "theViews/dashboard.view.php";
  exit();

  } else {

    header ('location: ../controllers/index.php');
    exit();
  }

?>
