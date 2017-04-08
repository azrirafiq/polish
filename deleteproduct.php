<?php
$product_id=$_GET['id'];

$conn=mysqli_connect('localhost','root','','mudah');

if (!$conn) {
    die('Cannot connect to database');
}
$sql="DELETE FROM order_form WHERE id='$product_id'";
$result=mysqli_query($conn,$sql);

if ($result) {
    echo 'Delete succesfull';
}
else {
    echo 'Cannot delete table';
}
echo '<br /><a href="productlist.php">Back to Product List</a>'
?>

