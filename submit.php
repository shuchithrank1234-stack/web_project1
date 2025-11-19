<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $phone = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);
    $nationality = htmlspecialchars($_POST['nationality']);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Registration Successful</title>
    </head>

    <body style="font-family: Arial; background-color: #c7f0c3; text-align: center;">
        <h2>Registration Successful!</h2>
        <p><strong>Full Name:</strong> <?= $fullname ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Date of Birth:</strong> <?= $dob ?></p>
        <p><strong>Gender:</strong> <?= $gender ?></p>
        <p><strong>Phone Number:</strong> <?= $phone ?></p>
        <p><strong>Course:</strong> <?= $course ?></p>
        <p><strong>Address:</strong> <?= $address ?></p>
        <p><strong>Nationality:</strong> <?= $nationality ?></p>
    </body>

    </html>
<?php
} else {
    echo "No data received! Please fill out the form first.";
}
?>