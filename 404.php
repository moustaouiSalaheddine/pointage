<?php
include_once './service/EmployeService.php';
include_once './service/PointageService.php';
include_once './service/UserService.php';
$es = new EmployeServices();
$ps = new PointageServices();
$us = new UserService();
?>  
<!DOCTYPE html>  
<html>  
    <head>  
        <title>test Photo</title>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    </head>  
    <body>  
        <br /><br />  
        <div class="container" style="width:500px;">  
            <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
            <br />  
            <input type="file" name="ms-image" id="ms-image" />  
            <br />  
            <input type="button" name="insert" id="insert" value="Insert" class="btn btn-info" />  

            <br />  
            <br />  
            <table class="table table-bordered">  
                <tr>  
                    <th>Image</th>  
                </tr> 
                <tr>  
                    <td id="uploaded_image">  
                        <!--<img src="data:image/jpeg;base64,' . base64_encode($row['name']) . '" height="200" width="200" class="img-thumnail" />-->  
                    </td>  
                </tr>  
            </table>  
        </div>  
    </body>  
</html>  
<!--<script>
    $(document).ready(function () {
        $('#insert').click(function () {
            var image_name = $('#ms-image').val();
            if (image_name == '')
            {
                alert("Please Select Image");
                return false;
            } else
            {
                var extension = $('#ms-image').val().split('.').pop().toLowerCase();
                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
                {
                    alert('Invalid Image File');
                    $('#ms-image').val('');
                    return false;
                } else {

                    $photo = $('#ms-image').val();
                    alert("good"+$('#ms-image').val());
//        $sexe = $(".ms-block-rl input[type=radio]:checked").val(); , "sexe": $sexe
                    $.ajax({
                        type: "POST",
                        url: "controller/employe/testImage.php",
                        data: {"photo": $photo},
                        success: function (res) {

                            console.log(res);
//                                fillData(res);
                        }
                    });

                }

            }
        });
    });
</script>  -->
<script>
    $(document).ready(function () {
        $(document).on('change', '#ms-image', function () {
            alert();
            var name = document.getElementById("ms-image").files[0].name;
            var form_data = new FormData();
            var ext = name.split('.').pop().toLowerCase();
            if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1)
            {
                alert("Invalid Image File");
            }
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("ms-image").files[0]);
            var f = document.getElementById("ms-image").files[0];
            var fsize = f.size || f.fileSize;
            if (fsize > 2000000)
            {
                alert("Image File Size is very big");
            } else
            {
                alert();
                form_data.append("file", document.getElementById('ms-image').files[0]);
                $.ajax({
                    url: "controller/employe/testImage.php",
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                    },
                    success: function (data)
                    {
                        $('#uploaded_image').html(data);
                    }
                });
            }
        });
    });
</script>
