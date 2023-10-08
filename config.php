<?php
    $conn = new mysqli('localhost','root','', 'fashconn');
    if(!$conn){
        echo 'Database Connected' . mysqli_error();
    }
?>