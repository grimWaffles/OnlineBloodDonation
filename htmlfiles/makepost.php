<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Make a Post- Online Blood Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <!--Navbar-->

    <?php
        include '../dbconn.php';
        include 'listfunctions.php';

        $sql="SELECT username, astatus FROM userlogin WHERE astatus='active'";
        $result=mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($result);

        if ($numrows==0) {
            makeitrain('inactive');
        }
        else{
            makeitrain('active');
        }
    ?>

    <!--mainbody-->
    <div class="row mx-auto">
        <div class="col-sm-2"></div>

        <div class="col-sm">
            <div class="container-fluid">
                <br><br><br>
                    <p style="text-align:center"><b><u>Enter details below to proceed:</u></b></p><br>
                    <form action="../phpscripts/postchecker.php" method="POST">   <!--loginform-->
                                    <div class="form-group">
                                        <label for="fname">*Your first name:</label>
                                        <input type="text" name="fname" class="form-control form-control-sm" required='required'><br>
                                       
                                        
                                        <label for="phone">*Phone:</label>
                                        <input type="text" name="phone" class="form-control form-control-sm"required='required'><br>
                                       
                                        <label for="location">*Location:</label>
                                        <input type="text" name="location" class="form-control form-control-sm" placeholder="Hospital Name e.g Square Hospital" required='required' id="hos"><br>
                                        
                                        <label for="bloodgrp">*Blood Group:</label>
                                        <select name="bloodgrp" id="seltype" class="form-control form-control-sm mr-sm-2">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            
                                        </select><br>

                                        <label for="quantity">*Quantity (Number of bags):</label>
                                        <input type="text" name="quantity" class="form-control form-control-sm" placeholder="In number of bags e.g 4" required='required'><br>
                                    </div>
                                <button type="submit" class="btn btn-danger" name="loginreg">Make a post</button>
                    </form>
                    <br><br><br><br>
                    
                    
            </div>
        </div>

        <div class="col-sm-2"></div>
    </div>
        
    
</body>
</html>