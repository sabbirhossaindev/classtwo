<?php

// name data
echo"First Name: " . $_POST['user_first_name'];
echo "<br>";
echo"Middle Name: " . $_POST['user_middle_name'];
echo "<br>";
echo "Last Name: " . $_POST['user_last_name'];

echo "<br>";
// Birth day
echo"Birthday Month: " . $_POST['user_birthday_month'];
echo"Birthday Date: " . $_POST['user_birthday_date'];
echo"Birthday Year: " . $_POST['user_birthday_year'];
echo "<br>";

//phone
echo"Phone Number: " . $_POST['user_phone_number'];
echo "<br>";

// email
echo"E-mail Address: " . $_POST['user_email'];
echo "<br>";

// Select Present Address
echo"Select Present Address: " .  $_POST['user_present_address'];
echo "<br>";

// Select Permanent Address
echo"Select Permanent Address: " .  $_POST['user_permanent_address'];
echo "<br>";

// Enter your city
echo"Enter your city: " .  $_POST['user_city'];
echo "<br>";

// Enter you state
echo"Enter you state: " .  $_POST['user_state'];
echo "<br>";

//
// echo $_POST['user_phone_number'];

?>