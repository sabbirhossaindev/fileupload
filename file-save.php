<?php

// --------------------- name data ---------------------------
echo"User Name: " . $_POST['user_first_name'] . " " . $_POST['user_middle_name']. " " .$_POST['user_last_name'];
echo "<br>";

echo"User Password: " . $_POST['user_password'];
echo "<br>";
// ---------------------------- Birth day ------------------------------
echo"Birthday: " . $_POST['user_birthday_month']."/".  $_POST['user_birthday_date'] ."/". $_POST['user_birthday_year'];
echo "<br>";
// ------------------------ gender ---------------------
echo"Gender: " . $_POST['gender'];
echo "<br>";

// --------------------------Of which country are you a citizen? -------------------------
$option = isset($_POST['country_citizen']) ? $_POST['country_citizen'] : false;
//    if ($option) {
//       echo htmlentities($_POST['country_citizen'], ENT_QUOTES, "UTF-8");
//    } else {
//      echo "task option is required";
//      exit; 
//    }
   
echo"which country are you a citizen: " . $_POST['country_citizen'];
echo "<br>";

//----------------------phone --------------------------
echo"Phone Number: " . $_POST['user_phone_number'];
echo "<br>";

// ------------------- email --------------------------------
echo"E-mail Address: " . $_POST['user_email'];
echo "<br>";

// Do you speak any languages other than English?
echo"Do you speak any languages other than English: " .  $_POST['language'];
echo "<br>";

// upload file......
var_dump($_FILES['photo']);

$file_name = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$file_destination = 'uploads/'.$file_name;
move_uploaded_file($file_tmp,$file_destination);
echo "<h1>File uploaded done!</h1>";

echo $file_name;




?>