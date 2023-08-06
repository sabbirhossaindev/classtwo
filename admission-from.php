<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission From</title>
</head>

<body>
    <h2>Admission From by Freelancer Sabbir</h2>
</body>
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

    <br>
    <br>
    <input class="" type="submit" value="Submit">
</form>

</html>

<!-- Month name
    
    <label for="month_name">Month name</label><br> -->