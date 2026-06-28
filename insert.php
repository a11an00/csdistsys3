<?php

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO tblusers
            (fname, lname, contactno, email, address)
            VALUES
            ('$fname','$lname','$contactno','$email','$address')";

    if ($conn->query($sql) === TRUE) {

        echo "<h2>Data inserted successfully!</h2>";

        echo "<a href='index.html'>Back</a>";

    } else {

        echo "Error: " . $conn->error;

    }

    $conn->close();
}
?>