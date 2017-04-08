<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Polish My Skill with Bootstrap-JQuery</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
<div class="container">
<form id="newform" name="newform" class="form-horizontal" enctype="multipart/form-data" action="uploadfile.php" method="post">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h1>Polish My Skill</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
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
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="btn-group">
                <button class="btn btn-md btn-success">Submit</button>
                <button class="btn btn-md btn-warning" type="reset" id="btnreset">Reset</button>
            </div>
        </div>
    </div>
</form>
</div>
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