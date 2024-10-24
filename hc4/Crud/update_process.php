<?php
$conn=mysqli_connect("localhost", "root", "", "test_crud");

if (isset($_POST['id'])&& isset ($_POST['name'])){
    $id=$_POST['id'];
    $name=$_POST['name'];

    // echo "UPDATE 'categories' SET name='$name' WHERE id=$id";
    $q=mysqli_query($conn, "UPDATE `categories` SET name='$name' WHERE id=$id");
}