<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission From</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
.admission {
    text-align: center;
}

.sabbir {
    color: crimson;
}

.submit-btn {
    height: 30px 60px;
    width: 200px;
    background-color: crimson;
    color: white;
    border-radius: 10px;
    outline: none;
}

.file-form {
    text-align: center;
}
</style>

<body class='p-3'>
    <h2 class='admission mt-3'>Admission From by <span class="sabbir">Freelancer Sabbir</span>.</h2>
    <hr>
    <div class="row justify-content-center file-form">
        <form action="file-save.php" method="POST" enctype="multipart/form-data">
            <h3 class="mt-3 my-2">Name & Password Field</h3>

            <label for="user_first_name">First name</label><br>
            <input type="text" name="user_first_name" placeholder="first name"><br>

            <label for="user_middle_name">Middle name</label><br>
            <input type="text" name="user_middle_name" placeholder="middle name"><br>

            <label for="user_last_name">Last name</label><br>
            <input type="text" name="user_last_name" placeholder="last name"><br>

            <label for="user_password">Password</label><br>
            <input type="password" name="user_password" placeholder="enter your password"><br>


            <h4 class="mt-3 my-2">Birthday Field</h4>

            <label for="user_birthday_month">Birthday Month name</label><br>
            <input type="text" name="user_birthday_month" placeholder="month name"><br>

            <label for="user_birthday_date">Birthday Date</label><br>
            <input type="text" name="user_birthday_date" placeholder="date name"><br>

            <label for="user_birthday_year">Birthday year</label><br>
            <input type="text" name="user_birthday_year" placeholder="year name"><br>

            <h3 class="mt-3 my-2">Gender</h3>

            <input type="radio" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" name="gender" value="female">
            <label for="female">Female</label><br>

            <h4 class="mt-3 my-2">Of which country are you a citizen?</h4>

            <select name="country_citizen">
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

            <h4 class="mt-3 my-2">Do you speak any languages other than English?</h4>
            <input type="radio" name="language" value="Yes">
            <label for="Yes">Yes</label><br>
            <input type="radio" name="language" value="No">
            <label for="No">No</label><br>

            <!-- file upload -->
            <input type="file" name="fileUpload" id="" aria-label="Upload" class="mt-2 my-3">

            <input class="mt-3 submit-btn" type="submit" value="Submit">
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>