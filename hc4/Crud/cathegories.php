<?php
$conn=mysqli_connect("localhost", "root", "", "test_crud");
$q=mysqli_query($conn, "SELECT * FROM categories");
$categories=mysqli_fetch_all($q, MYSQLI_ASSOC);
echo "<pre>";
print_r($categories); 
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="./new_record.php">Create New Record</a>
<table border="1" cellspacing="0" cellpadding="15">
    <thead>
        <tr>
            <th> Name </th>
            <th> Action </th>
            <th> Created At </th>
    </tr>
    </thead>
    <tbody>
        <?php
        foreach ($categories as $category) {
            echo "<tr>
                <td><a href='./edit_record.php?id={$category['id']}' target='_blank'>{$category['name']}</a></td>
                <td><a href='./delete_process.php?id={$category['id']}'> delete</a></td>
                <td>{$category['created_at']}</td> 
            </tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>