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

// ---------------------- Select Present Address -------------------
echo"Select Present Address: " .  $_POST['user_present_address'];
echo "<br>";

// -------------------------- Select Permanent Address --------------------------
echo"Select Permanent Address: " .  $_POST['user_permanent_address'];
echo "<br>";

//------------------------- Enter your city ------------------------
echo"Enter your city: " .  $_POST['user_city'];
echo "<br>";

echo"State / Province: " .  $_POST['user_state'];
echo "<br>";

echo"Zip Code: " .  $_POST['user_zip'];
echo "<br>";

// --------------------Emergency Contact --------------------------
// first name
echo"Name: " .  $_POST['user_emergency_first_name']. " " . $_POST['user_emergency_last_name'];
echo "<br>";
// user_relationship
echo"Enter your relationship: " .  $_POST['user_relationship'];
echo "<br>";
// user_emergency_phone_number
echo"Enter you emergency phone number: " .  $_POST['user_emergency_phone_number'];
echo "<br>";
// Enter user_emergency_email
echo"Enter emergency email: " .  $_POST['user_emergency_email'];
echo "<br>";
// Do you speak any languages other than English?
echo"Do you speak any languages other than English: " .  $_POST['language'];
echo "<br>";

?>