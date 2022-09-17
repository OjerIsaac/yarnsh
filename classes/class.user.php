<?php

require_once "db.php";

//reset the timezone default
date_default_timezone_set('Africa/Lagos');

session_start();

class Agent
{
 
 protected $db;

 public function __construct()
 {
  $this->db = new Database();
  $this->db = $this->db->connect();
 }

 public function agentExist($email)
 {
  $sql = "SELECT id from agent WHERE email = ?";
  $stmt = $this->db->prepare($sql);
  $stmt->execute([$email]);
  $count_row = $stmt->rowCount();

  if ($count_row > 0) {
   return true;
  } else {
   return false;
  }
 }

 public function loginAgent($email, $pass)
 {
  $rows = $this->getAgentDetails($email)->fetch(PDO::FETCH_ASSOC);

  if ($pass == $rows['password']) {
   extract($rows);

   $sessioned = $this->setSession($rows['id'], $rows['email']);

   $_SESSION['session_id'] = $sessioned;

   if ($sessioned) {
    return true;
   }
   // return true;
  }else {
   return false;
  }
 }

 public function getAgentDetails($email)
 {
  $sql = "SELECT * from agent WHERE email = ?";
  $stmt = $this->db->prepare($sql);
  $stmt->execute([$email]);
  $count_row = $stmt->rowCount();

  if ($count_row == 1) {
   return $stmt;
  }
 }

 public function setSession($id, $email)
 {
  $_SESSION['id'] = $id;
  $_SESSION['email'] = $email;
  return true;
 }

 public function getPostedVacancy()
 {
  // $sql = "SELECT * FROM vacancy LIMIT 2";
  $sql = "SELECT * FROM vacancy ORDER BY id DESC LIMIT 3"; 
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  return $stmt;
 }

 public function getPostedVacancy_2($id)
 {
  // $sql = "SELECT * FROM vacancy WHERE id > ? LIMIT 1";
  $sql = "SELECT * FROM vacancy WHERE ? > id LIMIT 5";  //this shit is crap, i need more recent upload to take priority
  $stmt = $this->db->prepare($sql);
  $stmt->execute([$id]);
  if ($stmt->rowCount() > 0) {
    return $stmt;
  }
 }

 public function getPostedVacancyAgent($id) //agent display
 {
  $sql = "SELECT * FROM vacancy WHERE agent_id = ?";
  $stmt = $this->db->prepare($sql);
  $stmt->execute([$id]);
  return $stmt;
 }

 public function newVacancy($location, $area, $price, $type, $rent, $address, $description, $ag_name, $ag_phone, $agent_id)
 {
  $image = 'assets/img/default.jpg';
  $sql = "INSERT INTO vacancy (location, area, price, type, rent, address, description, agent_name, agent_number, agent_id, agent_image, date)" . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
  $stmt = $this->db->prepare($sql);
  $stmt->execute([$location, $area, number_format($price), $type, $rent, $address, $description, $ag_name, $ag_phone, $agent_id, $image, date('d M Y h:ia')]);
  return true;
  // date('Y.m.d h:i:sa')
 }

 public function validateImage($file)
 {
  $result = true;
  $part = explode(".", $file);
  $extension = end($part);
  switch (strtolower($extension)) {
   case 'jpg':
   case 'gif':
   case 'png':
   case 'jpeg':

   return $result;
  }
  $result = false;
  return $result;
 }

 public function uploadImage($tmp_name)
 {
  if ($tmp_name) {
   $file = $tmp_name;
   $image_name = time().uniqid(). ".jpg";
   $path = "../uploads/".$image_name;

   if (move_uploaded_file($file, $path)) {
    return $path;
   }
  }
 }

 public function insertImage($image, $id)
 {
   $sql = "UPDATE vacancy SET agent_image = ? WHERE id = ?";
   $stmt = $this->db->prepare($sql);
   $stmt->execute([$image, $id]);
   return true;
 }

 public function removeVacancy($id)
 {
   $sql = "DELETE FROM vacancy WHERE id = ?";
   $stmt = $this->db->prepare($sql);
   $stmt->execute([$id]);
   return true;
 }

}


class Ride extends Agent {

  public function newBook()
  {
    $sql = "INSERT INTO booking (pickup, destination, name, booking_id, rent, date)" . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([ date('d M Y h:ia')]);
    return true;
  }

}
