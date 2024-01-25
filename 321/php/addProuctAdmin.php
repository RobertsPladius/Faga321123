<?php

    require("connect.php");
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_path = $_POST['image_path'];
    $sql = "INSERT INTO Product (name, price, image_path) Values ('$name', $price, '$image_path');";

    if($result = $conn->query($sql))
    {
        header("Location: ../pages/admin.php");
    }
?>