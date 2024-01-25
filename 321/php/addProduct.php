<?php
    $product_id = $_POST['product_id'];
    session_start();
    require("connect.php");
    $sql = "Insert Into Cart (client_id, product_id) Values ('".$_SESSION['id']."', '$product_id')";
    if($result = $conn->query($sql))
    {
        header("Location: ../pages/catalog.php");
    }
?>