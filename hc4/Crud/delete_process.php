<?php
$conn=mysqli_connect("localhost", "root", "", "test_crud");
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM `categories` WHERE `id`=$id");
header("location:cathegories.php");