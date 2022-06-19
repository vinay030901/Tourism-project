<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $location = $_POST['destination'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $request = " insert into book_form(name, email, mobile, location, gender, date) values('$name','$email','$mobile','$location','$gender','$date')";
    if (!mysqli_query($connection, $request))
        echo "something went wrong";
    header('book.php');
} else {
    echo 'something went wrong please try again!';
} ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/style.css">
</link>
<header class="video-header">
    <video src="images/hurray.mp4" autoplay loop playsinline muted>
    </video>
    <div class="viewport-header">
        <h1 style="font-family: 'Syncopate', sans-serif;
    color: white;
    text-transform: uppercase;
    line-height: 1.2;
    font-size: 3vw;
    text-align: center;">Your Trip is Confirmed
            <br>
            <span>Enjoy</span>
            <br>

        </h1>
        <br>
        <h1><a href="index.php" style="font-family: 'Syncopate', sans-serif;
    color: white;
    text-transform: uppercase;
    line-height: 1.2;
    font-size: 3vw;
    text-align: center;">Home Page</a></h1>
    </div>

</header>

<div id="circle"></div>
</body>

</html>