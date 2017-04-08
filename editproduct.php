<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<?php
if (!isset($_GET['id']) || empty($_GET['id']) ) {
    echo 'Empty id';
}
?>
<?php
$conn=mysqli_connect('localhost','root','','mudah');

if(!$conn) {
    die('cannot connect to database');
}

echo 'Database connected...';
?>
<head>
<meta charset="UTF-8">
<title>Edit Product</title>

<style type="text/css">
#tblproduct {
    border: solid 1px #ddd;
    border-collapse: collapse;
    width: 95%;
    font-family: "Callibri", sans;
    font-size: 14px;
    text-align: center;
}
#tblproduct th{
    border: solid 1px #ccc;
    height: 42px;
    background-color: #cccc00;
}
#tblproduct tr, #tblproduct td{
    border: solid 1px #ccc;
    height: 42px;
}
#tblproduct tr:nth-child(even){
    height: 48px;
    color: #000;
    background-color: #ddd;
}
#tblproduct tr:nth-child(odd){
    height: 48px;
    color: #000;
    background-color: #2eb82e;
}

</style>
</head>
<body>
<?php
    $passed_id=$_GET['id'];
    $sql="SELECT * FROM order_form WHERE id='$passed_id'";
    $res=mysqli_query($conn,$sql) or die('cannot run query');

    $row=mysqli_fetch_assoc($res);
?>
<h1>Product Edit</h1>

<!--<table id="tblproduct" name"tblproduct">-->
<form id="editform" name="editform" method="post" action="updateproduct.php">
<input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">

<table id="tblproduct" name="tblproduct">
<tr>
    <td><b>ID</b></td>
    <td><b><?php echo $row['id']; ?></b></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" id="inpname" name="inpname" value="<?php echo $row['name'];?>"/></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" id="tele" name="tele" value="<?php echo $row['no_tel'];?>"/></td>
</tr>
<tr>
<td>Favourite Food</td>
<td><input type="text" id="fav" name="fav" value="<?php echo $row['fav_food'];?>"/></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" id="type" name="type" value="<?php echo $row['type'];?>"/></td>
</tr>
<tr>
<td>Payment</td>
<td><input type="text" id="paym" name="paym" value="<?php echo $row['pay'];?>"/></td>
</tr>
<tr>
<td>Comment</td>
<td><input type="text" id="comm" name="comm" value="<?php echo $row['comment'];?>"/></td>
</tr>

<tr>
<td></td>
<td><button type="submit">Update</button></td>
</tr>

</table>
</form>
<?php
mysqli_close($conn);
?>
</body>
</html>