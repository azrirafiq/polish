<!DOCTYPE html>
<html>
<?php
$conn=mysqli_connect('localhost','root','','mudah');

if(!$conn) {
    die('cannot connect to database');
}

echo 'Database connected...';
?>
<head>
<meta charset="UTF-8">
<title>Product Listing</title>

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
<h1>Product Listing</h1>

<table id="tblproduct" name"tblproduct">
    <thead>
        <tr>
        <th>#</th>
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Favourite Food</th>
        <th>Type</th>
        <th>Payment</th>
        <th>Comment</th>
        <th>action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql="SELECT * FROM order_form WHERE name <> 'NAMA'";
        $res=mysqli_query($conn,$sql) or die('cannot run query');
        $num_rows=mysqli_num_rows($res);

        $numbr=1;
        if ($num_rows>0) {
        while ($row=mysqli_fetch_array($res)) {
    ?>
        <tr>
            <td><?php echo $numbr; ?></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['no_tel']; ?></td>
            <td><?php echo $row['fav_food']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['pay']; ?></td>
            <td><?php echo $row['comment']; ?></td>
            <td><a href="editproduct.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="deleteproduct.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
    <?php
        $numbr++;
        }
        // echo 'query return rows';
        }
        else {
            echo 'table empty';
        }
    ?>  
     
    </tbody>
</table>
</body>
</html>