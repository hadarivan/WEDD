
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

if(isset($_POST["fname"])) {
    $fname = $_POST["fname"];
    $query2 = "INSERT into tb_users_203(foodType,guestName) values (' ', '$fname')";
    $result = mysqli_query($connection, $query2);

    $query2 = "SELECT * FROM tb_users_203";
    $result = mysqli_query($connection, $query2);
}


if(isset($_POST["id"])) {
    $guestName = $_POST["id"];
    $query3 = "DELETE FROM tb_users_203 WHERE guestName= '$guestName'";
    $result = mysqli_query($connection, $query3);

    $query3 = "SELECT * FROM tb_users_203";
    $result = mysqli_query($connection, $query3);
}
if(isset($_POST['choice'])) {
    $foodType = $_POST['choice'];
    $query4 = "UPDATE tb_users_203 SET foodType='$foodType' WHERE guestName='דור משה'";
    $result = mysqli_query($connection, $query4);

    $query4 = "SELECT * FROM tb_users_203";
    $result = mysqli_query($connection, $query4);
}

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["foodType"] . "</td>";
    echo "<td>" . $row["guestName"] . "</td>";
    echo "<td>" . "<button id='$row[guestName]' class='delete' type='button'><i class='fa fa-window-close' aria-hidden='true'></i>
    </button>" . "</td></tr>";
}





mysqli_free_result($result);
mysqli_close($connection);
?>