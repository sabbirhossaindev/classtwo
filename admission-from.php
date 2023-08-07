<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission From</title>
</head>

<body>
    <h2>Admission From by Freelancer Sabbir.</h2>

    <form action="submit-from.php" method="POST">

        <h3>Name Field</h3>
        <label for="user_first_name">First name</label><br>
        <input type="text" name="user_first_name" placeholder="first name"><br>

        <label for="user_middle_name">Middle name</label><br>
        <input type="text" name="user_middle_name" placeholder="middle name"><br>

        <label for="user_last_name">Last name</label><br>
        <input type="text" name="user_last_name" placeholder="last name"><br>

        <h4>Birthday Field</h4>
        <label for="user_birthday_month">Birthday Month name</label><br>
        <input type="text" name="user_birthday_month" placeholder="month name"><br>

        <label for="user_birthday_date">Birthday Date</label><br>
        <input type="text" name="user_birthday_date" placeholder="date name"><br>

        <label for="user_birthday_year">Birthday year</label><br>
        <input type="text" name="user_birthday_year" placeholder="year name"><br>

        <h3>Gender</h3>
        <input type="checkbox" id="male" name="male" value="male">
        <label for="male">male</label><br>

        <input type="checkbox" id="female" name="female" value="female">
        <label for="female">female</label><br>

        <h4>Of which country are you a citizen?</h4>
        <select id="country_citizen">
            <option value="Bangladesh" selected>Bangladesh</option>
            <option value="India">India</option>
            <option value="London">London</option>
            <option value="America">America</option>
            <option value="Brazil">Brazil</option>
            <option value="Germane">Germane</option>
            <option value="Argentina">Argentina</option>
        </select> <br>
        <br>

        <label for="user_phone_number">Phone Number</label><br>
        <input type="text" name="user_phone_number" placeholder="enter number"><br>
        <br>
        <label for="user_email">Email</label><br>
        <input type="email" name="user_email" placeholder="example@example.com"><br>

        <h4>Mailing Address</h4>
        <label for="user_present_address">Type Present Address</label><br>
        <input type="text" name="user_present_address" placeholder="enter your address"><br>

        <label for="user_permanent_address">Type Permanent Address</label><br>
        <input type="text" name="user_permanent_address" placeholder="enter your address"><br>

        <label for="user_city">City</label><br>
        <input type="text" name="user_city" placeholder="enter your city"><br>

        <label for="user_state">State / Province</label><br>
        <input type="text" name="user_state" placeholder="enter you state"><br>

        <label for="user_zip">Postal / Zip Code</label><br>
        <input type="number" name="user_zip" placeholder="enter your zip code"><br>

        <h3>Emergency Contact</h3>
        <label for="user_emergency_first_name">First name</label><br>
        <input type="text" name="user_emergency_first_name" placeholder="first name"><br>

        <label for="user_emergency_last_name">Last name</label><br>
        <input type="text" name="user_emergency_last_name" placeholder="last name"><br>

        <label for="user_relationship">Relationship</label><br>
        <input type="text" name="user_relationship" placeholder="last name"><br>

        <label for="user_emergency_phone_number">Phone Number</label><br>
        <input type="text" name="user_emergency_phone_number" placeholder="enter number"><br>

        <label for="user_emergency_email">Email</label><br>
        <input type="email" name="user_emergency_email" placeholder="example@example.com"><br>

        <h4>Do you speak any languages other than English?</h4>
        <input type="checkbox" id="Yes" name="Yes" value="Yes">
        <label for="Yes">Yes</label><br>

        <input type="checkbox" id="No" name="No" value="No">
        <label for="No">No</label><br>

        <br>
        <br>
        <input class="" type="submit" value="Submit">
    </form>
</body>

</html>

<!-- Month name
    
    <label for="month_name">Month name</label><br> -->