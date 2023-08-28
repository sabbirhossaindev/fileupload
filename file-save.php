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
$target_directory = "uploads/";
$target_file = $target_directory . basename($_FILES["fileUpload"]["name"]);
$fileuploadDone = 1;
$fileExtension = pathinfo($target_file,PATHINFO_EXTENSION);
// ফাইলটি ছবি কিনা তা চেক করে
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if($check !== false) {
        echo	"ফাইলটি ইমেজ - " . $check["mime"] . ".";
        $fileuploadDone = 1;
    } else {
        echo "ফাইলটি ইমেজ নয়।";
        $fileuploadDone = 0;
    }
}
// ফাইলটি ইতিমধ্যে বিদ্যমান কিনা তা চেক করে
if (file_exists($target_file)) {
    echo "দুঃখিত, ফাইলটি পূর্ব থেকেই আপলোড রয়েছে।";
    $fileuploadDone = 0;
}
// ফাইলের সাইজ চেক
if ($_FILES["fileUpload"]["size"] > 500000) {
    echo "দুঃখিত, আপনার ফাইলটি অনেক বড় আকারের।";
    $fileuploadDone = 0;
}
// কয়েকটি নির্দিষ্ট টাইপের ফাইল আপলোডের অনুমতি
if($fileExtension != "jpg" && $fileExtension != "png" && $fileExtension != "jpeg"
&& $fileExtension != "gif" ) {
    echo "দুঃখিত, শুধুমাত্র JPG, JPEG, PNG এবং GIF ফাইল আপলোড করা যাবে।";
    $fileuploadDone = 0;
}
// $fileuploadDone কি error এর কারনে 0 তে সেট হয়েছে কিনা তা চেক
if ($fileuploadDone == 0) {
    echo "দুঃখিত, আপনার ফাইলটি আপলোড হয়নি।";
// যদি সবকিছু ঠিক থাকে, তাহলে ফাইল আপলোড করা।
} else {
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
        echo " ". basename( $_FILES["fileUpload"]["name"]). " ফাইলটি আপলোড হয়েছে। ";
    } else {
        echo "দুঃখিত, আপনার ফাইলটি আপলোডে সমস্যা হচ্ছে।";
    }
}

?>