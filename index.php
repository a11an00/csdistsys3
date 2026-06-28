<?php
include("db.php");

$sql = "SELECT * FROM tblusers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
            padding:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        table, th, td{
            border:1px solid #ccc;
        }

        th{
            background:#007BFF;
            color:white;
            padding:10px;
        }

        td{
            padding:10px;
            text-align:center;
        }

        h2{
            text-align:center;
        }

        a{
            text-decoration:none;
            color:blue;
        }
    </style>
</head>
<body>

<h2>Registered Users</h2>

<table>

<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mobile Number</th>
    <th>Email</th>
    <th>Address</th>
    <th>Posting Date</th>
</tr>

<?php

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        echo "<tr>";

        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['FirstName']."</td>";
        echo "<td>".$row['LastName']."</td>";
        echo "<td>".$row['MobileNumber']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td>".$row['PostingDate']."</td>";

        echo "</tr>";
    }

}else{

    echo "<tr><td colspan='7'>No records found.</td></tr>";

}

$conn->close();

?>

</table>

<br>

<a href="index.html">← Back to Form</a>

</body>
</html>