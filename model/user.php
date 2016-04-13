<?php
$users = [
    array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1", "img" => "photo1.jpg", "info" => "This is user 1 info"),
    array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2", "img" => "photo2.jpg", "info" => "This is user 2 info"),
    array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3", "img" => "photo3.jpg", "info" => "This is user 3 info"),
  ];	//this is the array that contains user info
?>

<?php function fromCookie($login, $users){	//function to return user array from cookies
  foreach ($users as $value){
    if ( $login == $value['login'] ) return $value;
  }
  return false;
} ?>