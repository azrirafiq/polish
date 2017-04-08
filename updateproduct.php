<?php
$product_id=$_POST['product_id'];

if (!isset($_POST['inpname']) || empty($_POST['inpname']) ) {
    die('Input empty');
}
if (!isset($_POST['tele']) || empty($_POST['tele']) ) {
    die('Input empty');
}
if (!isset($_POST['fav']) || empty($_POST['fav']) ) {
    die('Input empty');
}
if (!isset($_POST['type']) || empty($_POST['type']) ) {
    die('Input empty');
}
if (!isset($_POST['paym']) || empty($_POST['paym']) ) {
    die('Input empty');
}
if (!isset($_POST['comm']) || empty($_POST['comm']) ) {
    die('Input empty');
}

$nama=$_POST['inpname'];
$tele=$_POST['tele'];
$fav=$_POST['fav'];
$type=$_POST['type'];
$paym=$_POST['paym'];
$comm=$_POST['comm'];

$conn=mysqli_connect('localhost','root','','mudah');

if (!$conn) {
    die('Cannot connect to database');
}

$sql="UPDATE order_form SET name='$nama', no_tel='$tele', fav_food='$fav', type='$type', pay='$paym', comment='$comm' WHERE id='$product_id'";
$result=mysqli_query($conn,$sql);

if ($result) {
    echo 'Update succesfull';
}
else {
    echo 'Cannot update table';
}
echo '<br /><a href="productlist.php">Back to Product List</a>'
?>
