<?php

$con = mysqli_connect('localhost','root');

if($con) {
    echo "Povezava uspešna";
    }
    else {
        echo "Ni povezave";
}

mysqli_select_db($con, 'nekitest');

$User = $_POST['ime'];
$Email = $_POST['email'];
$Mobile = $_POST['tel'];
$Comment = $_POST['comments'];

$query = " insert into userinfo (User, Email, Mobile, Comment) values ('$User', '$Email', '$Mobile', '$Comment')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>