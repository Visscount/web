 <?php
$conn=mysqli_connect("localhost", "root", "", "test_crud");
$id=$_GET['id'];
$q=mysqli_query($conn, "SELECT * FROM categories
    WHERE id=$id");
    $category=mysqli_fetch_assoc($q);
    // echo "<pre>";
    // print_r($category);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit category <?php echo
    $category ['name']; ?></title>
</head>
<body>
    <h1> Edit Category</h1>
   
    <form action="./update_process.php" method="post">
    <input type="text" name="name" value="<?php echo
    $category ['name']; ?>">
    <button> Save changes</button>
    <input type="hidden" name="id" value="<?php echo $category ['id']; ?>">
</form>
    
</body>
</html>