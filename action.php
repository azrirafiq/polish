<?php

//var_dump($_POST);
if (!isset($_POST['nama']) || empty($_POST['nama'])) {
    echo 'please fill-in the input name <br>';
    die();
}

    echo 'Your name is '.$_POST['nama']."<br>";
    $nama=$_POST['nama'];

if (!isset($_POST['tel']) || empty($_POST['tel'])) {
    echo 'please fill-in the input number <br>';
    die();
}

    echo 'Your number is '.$_POST['tel']."<br>";
    $tel=$_POST['tel'];

if (!isset($_POST['food']) || empty($_POST['food'])) {
    echo 'please select your favourite food <br>';
    die();
}

    echo 'Your favourite food is '.$_POST['food']."<br>";
    $food=$_POST['food'];

if (!isset($_POST['sel']) || empty($_POST['sel'])) {
    echo 'please select food condition <br>';
    die();
}

    echo 'Your food condition is '.$_POST['sel']."<br>";
    $sel=$_POST['sel'];

if (!isset($_POST['delivery']) || empty($_POST['delivery'])) {
    echo 'please select delivery if want delivery <br>';
    die();
}

    echo 'delivery '.$_POST['delivery']."<br>";
    $payment=$_POST['delivery'];

if (!isset($_POST['com']) || empty($_POST['com'])) {
    echo 'please fill your comment <br>';
    die();
}

    echo 'Your comment is '.$_POST['com']."<br>";
    $com=$_POST['com'];

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
// mysql_connect('localhost','root','') or die('cannot connect to database');
// mysql_select_db('mudah');

$conn=mysqli_connect('localhost','root','','mudah');

if (!$conn) {
    die('cannot connect to database'.mysqli_connect_error());
}

$sql="INSERT INTO order_form(name,no_tel,fav_food,type,pay,comment) VALUES ('$nama','$tel','$food','$sel','$payment','$com')";
// mysql_query($sql) or die('cannot insert database');
mysqli_query($conn,$sql);

echo '<b>succesfully insert..</b>';
echo '<a href="index.php"><b>Back to form</b></a>';
?>