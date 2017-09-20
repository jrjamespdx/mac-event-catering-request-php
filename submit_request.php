<?php

function buildEventSetupRequest(){
  $message = "Meeting/Event Name = " . $_POST['event_name'] . "\r\n";
  $message .= "Location Of Event = " . $_POST['event_location'] . "\r\n";
  $message .= "Date(s) of Function = " . $_POST['event_date'] . "\r\n";
  $message .= "Approximate Number of Attendees = " . $_POST['attendees'] . "\r\n";
  $message .= "Start Time = " . $_POST['start_time'] . "\r\n";
  $message .= "End Time = " . $_POST['end_time'] . "\r\n";
  $message .= "==============================\r\n";
  $message .= "SETUP INFORMATION:\r\n";
  $message .= "Type of Event = " . $_POST['event_type'] . "\r\n";
  $message .= "Department Name = " . $_POST['department'] . "\r\n";
  $message .= "Sponsoring Committee = " . $_POST['committee'] . "\r\n";
  $message .= "Liaison/Admin Assistant = " . $_POST['liaison'] . "\r\n";
  $message .= "Phone/Extension = " . $_POST['phone'] . "\r\n";
  $message .= "==============================\r\n";
  $message .= "SETUP NOTES:\r\n";
  $message .= "==============================\r\n";
  $message .= $_POST['comments']."\r\n";
  
  return $message;
}


function buildMeetingRequest(){
  $message = "Meeting/Event Name = " . $_POST['event_name'] . "\r\n";
  $message .= "Date(s) of Function = " . $_POST['event_date'] . "\r\n";
  $message .= "Approximate Number of Attendees = " . $_POST['attendees'] . "\r\n";
  $message .= "Start Time = " . $_POST['start_time'] . "\r\n";
  $message .= "End Time = " . $_POST['end_time'] . "\r\n";
  $message .= "==============================\r\n";
  $message .= "SETUP INFORMATION:\r\n";
  $message .= "Type of Event = " . $_POST['event_type'] . "\r\n";
  $message .= "Department Name = " . $_POST['department'] . "\r\n";
  $message .= "Account Number = " . $_POST['account_number'] . "\r\n";
  $message .= "Sponsoring Committee = " . $_POST['committee'] . "\r\n";
  $message .= "Liaison/Admin Assistant = " . $_POST['liaison'] . "\r\n";
  $message .= "Phone/Extension = " . $_POST['phone'] . "\r\n";
  $message .= "==============================\r\n";
  $message .= "FOOD AND BEVERAGE ORDER:\r\n";
  if(!empty($_POST['food'])){
    
    foreach($_POST['food'] as $i => $food) {
      $ct = $_POST['ct'][$i];
      $message .= "$food ";
      switch($food) {
        case 'Coffee, Tea, Decaf':
          $message .= "for $ct people";
          break;
        case 'Coffee ONLY':
          $message .= " $ct airpots";
          break;
        case 'Ice Water':
          break;
        default:
          $message .= ": $ct";
          break;
      }
      $message .= "\r\n";
      $message .= "==============================\r\n";
      $message .= "Additional Food NOTES:\r\n";
      $message .= $_POST['food_notes']."\r\n";
    
    }
  }
  $message .= "==============================\r\n";
  $message .= "SETUP REQUEST:\r\n";
  $message .= $_POST['sr'];
  if($_POST['linen'] != '')
    $message .= " and " .$_POST['linen'];
  $message .= "\r\n";
  $message .= "==============================\r\n";
  $message .= "AV RESOURCES:\r\n";
  $message .= implode(', ', $_POST['av']) . "\r\n";
  $message .= "==============================\r\n";
  $message .= "AV NOTES:\r\n";
  $message .= $_POST['comments']."\r\n";
  return nl2br($message);
}

function buildNewUserRequest(){
  $message = "NEW USER INFORMATION\r\n";
  $message .= "User Name = " . $_POST['username'] . "\r\n";
  $message .= "Department = " . $_POST['department'] . "\r\n";
  $message .= "Job Title = " . $_POST['job_title'] . "\r\n";
  $message .= "Users Phone Number = " . $_POST['phone'] . "\r\n";
  //mgr
  $message .= "Manager Name: " . $_POST['mgr_name'] . "\r\n";
  $message .= "Manager Phone: " . $_POST['mgr_phone'] . "\r\n";
  
  $message .= "Northstar REQUIREMENTS\r\n";
  if(!empty($_POST['mbrchk'])) {
    foreach($_POST['mbrchk'] as $mbrchk) {
      $message .= "$mbrchk\r\n";
    }
  }
  $message .= "NETWORK ACCESS REQUIREMENTS\r\n";
  if(!empty($_POST['netacc'])) {
    foreach($_POST['netacc'] as $netacc){
      $message .= "$netacc\r\n";
    }
  }
  $message .= "ADDITIONAL INFORMATION\r\n";
  $message .= $_POST['comments'] . "\r\n";
  return $message;
}

$request_type = $_POST['request_type'];
$from = $_POST['email'];
switch($request_type){
  case 'new_user':
    $to = 'IShelpdesk@themac.com';
    $subject = 'Add New User Request';
    $message = buildNewUserRequest();
    break; 
  case 'meeting_request':
    $to = 'CateringMeetingRequest@themac.com';
    $message = buildMeetingRequest();
    $subject = 'Catering Meeting Request';
    break;
  case 'setup_request':
    $to = 'EventSetupRequest@themac.com';
    $message = buildEventSetupRequest();
    $subject = 'Event Setup Request';
    break;
  default:
    die(-1);
    break;
}


$headers = "From: $from\r\nCC:$from\r\nX-Mailer: PHP/".phpversion();
die( mail($to, $subject, $message, $headers));
?>
