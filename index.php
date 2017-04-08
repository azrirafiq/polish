<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Order</title>
</head>
<body style="color: black" id="grad1">

    <div class="container">
        <center>
        <h1><u>YOUR ORDER</u></h1>
        <h3 style="border: solid 10px; width:50%;">Please enter your order</h3>
        </center>
            <form action="action.php" method="post" name="newform">
            <div>
            NAME: <input name="nama" type="text" placeholder="enter your name">
            PHONE NUMBER: <input name="tel" type="text" placeholder="enter your phone number">
            </div><br>
            <div>
                SELECT YOUR FAVOURITE FOOD:<br>
                <input type="radio" name="food" value="mee">mee<br>
                <input type="radio" name="food" value="mee hoon">mee hoon<br>
                <input type="radio" name="food" value="kuew teow">kuew teow<br>                                    
            </div>
            <div style="padding-top: 10px">
                FOOD CONDITION:
                <select name="sel">
                    <!--<option selected="selected">type</option>-->
                    <option selected="selected" type="select" name="sel" value="sauce">sauce</option>
                    <option type="select" name="sel" value="fry">fry</option>
                    <option type="select" name="sel" value="wet">wet</option>
                 </select>
            </div>
            <div style="padding-top: 10px">
                PICKUP<u style="color: red; font-style: blur">(please tick if want us delivery)</u><br>
                <input type="checkbox" name="delivery" value="delivery">delivery
            </div>
            <div style="padding-top: 10px">
                COMMENT:<br>
                <textarea style="width:50%" name="com" placeholder="your comment"></textarea>
            </div>
            
                <div class="row">
                    <div class="col-md-6">
                        <label>Upload File</label>
                        <input class="form-control" type="file" id="myfile" name="myfile" accept="image/gif, image/jpeg" onchange="readURL(this);">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6"><img width="216" height="180" alt="selected-file" id="imgpreview" name="imgpreview" src="" />
                    </div>
                </div>
            <!-- <div style="padding-top: 10px">
                <input type="file">
            </div> -->
            <div style="padding-top: 10px">
                <center>             
                <button style="margin-bottom: 10px" name="submit" type="submit" id="contact-submit" data-submit="....sending">Submit</button>
                <input type="reset" value="Reset" id="btnreset">
                </center>
            </div>            
            </form>
    </div>

    <hr>
    <a href="productlist.php">Product list</a>
</body>
<script src="js/jquery-3.2.0.js"></script>
<script src="js/bootstrap.js"></script>

<script type="text/javascript">
$(document).ready(function (){
    //alert('page loaded succesfully');

    $('#myfile').on('change', function(){
        readURL(this);
    });
    
    $('#btnreset').on('click', function() {
        var f=document.getElementById('newform');
        f.reset();
        // document.form.newform.reset();
        $('#imgpreview').attr('src','');

    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {

            $('#imgpreview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
</html>