<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="register.php" method="POST">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br><br>

    <input type="submit" name="submit" value="Submit">
</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'labApplicationHomework';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO studentslab (fullname, email, gender) VALUES ('$fullname', '$email', '$gender')";

    if (mysqli_query($conn, $sql)) {
        echo "Inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

</body>
</html>