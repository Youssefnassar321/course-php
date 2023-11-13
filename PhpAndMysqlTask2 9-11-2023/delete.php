<?php

    require_once 'includes/connection.php';

    $name = $_GET['name'];
    $deleteemp = "DELETE FROM employee WHERE name=$name";

    if(mysqli_query($conn , $deleteemp)) {
        header('location:index.php');
    }