<?php
$conn=mysqli_connect('localhost','root', '', 'mudah');

if (!$conn) {
    die('Cannot connect to database');
}

echo 'Database connected...';

// if (!isset($_FILES['myfile']) || empty($_FILES['myfile']) ) {
//     die('Empty file');
// }
// else {
if  (isset($_FILES['myfile'])) {
    $filename=$_FILES['myfile']['name'];
    $tmpfile=$_FILES['myfile']['tmp_name'];

    if(!empty($filename)) {
        $dest='upload/'.$filename;
        move_uploaded_file($tmpfile, $dest);

        $sql="INSERT INTO order_form(gmbr) VALUES ('$dest')";
        $res=mysqli_query($conn,$sql);
    }
    else {
        die('Empty file...');
    }
}

echo 'Uploading file...</br>';

$sql2="SELECT gmbr FROM order_form ORDER BY id desc LIMIT 1,1";
$res2=mysqli_query($conn,$sql2);

$row2=mysqli_fetch_array($res2);
echo $row2['gmbr'];
echo '<a href="'.$row2['gmbr'].'">view file</a>';
?>