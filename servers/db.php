<?php
$dbhost = "182.50.133.51";
$dbuser = "studDB18A";
$dbpass = "stud18aDB1!";
$dbname = "studDB18A";

$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//testing connection success
if(mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
    );
}

$query="SELECT * FROM tb_users_203";
$result=mysqli_query($connection, $query);
if(!$result) {
    die("DB query failed.");
}

if(isset($_POST["fullName"])) {
    $fname = $_POST["fullName"];

    $query2 = "INSERT into tb_users_203(foodType,guestName) values (' ', '$fname')";
    $result = mysqli_query($connection, $query2);

    $query2 = "SELECT * FROM tb_users_203";
    $result = mysqli_query($connection, $query2);
}
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["foodType"] . "</td>";
    echo "<td>" . $row["guestName"] . "</td>";
    echo "<td>" . "<button id='delete' type='button'><i class='fa fa-window-close' aria-hidden='true'></i></button>" . "</td></tr>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>