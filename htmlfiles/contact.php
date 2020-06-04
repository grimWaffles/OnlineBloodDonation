<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home- Online Blood Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

        <link rel="stylesheet" href="custom.css">
    </head>
<body>

    <!--login modal section-->
                                <div class="modal fade" id="loginmodal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            
                                                    <h3>Login</h3>
                                                </div>
                                                <div class="modal-body">
                                                        <form action="../phpscripts/logincheck.php" method="POST">   <!--loginform-->
                                                            <div class="form-group">
                                                                <label for="user">*Username:</label>
                                                                <input type="text" name="user" class="form-control form-control-sm" required='required'><br>
                                                                <label for="pass">*Password:</label>
                                                                <input type="password" name="pass" class="form-control form-control-sm" required='required'>
                                                            </div>
                                                        <button type="submit" class="btn" name="loginreg">Log in</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--end login modal-->

                               <!--makepostmodal-->
                               <div class="modal fade" id="postmodal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            
                                                    <h3>Make a post</h3>
                                                </div>
                                                <div class="modal-body">
                                                <form action="../phpscripts/postchecker.php" method="POST">  
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

                                        <label for="date">Date Needed: </label>
                                        <input type="date" name="date" id="lastdate" class="form-control form-control-sm">
                                    </div>
                                <button type="submit" class="btn btn-danger" name="loginreg">Make a post</button>
                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!--end post modal-->
    <br>
    <div class="container-fluid">
    <div class="row mx-auto">

    <!--navbar-->
    <nav class="navbar navbar-expand-sm  bg-dark fixed-top">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-target="#postmodal" data-toggle="modal">Make a post</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php ">Contact Us</a></li>
                    </ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link" data-target="#loginmodal" data-toggle="modal">Login</a></li>
                        <li class="nav-item"><a href="login.php?login=showsignup" class="nav-link">Sign-up</a></li>
                    </ul>

    </nav>

    <!--end navbar-->

    <!--mainbody-->
        <div class="col-sm-1"  ></div>

        <div class="col-sm-10">
            
            <br><br>
             
            
            <h3><b><u>Here at OOB we strive for greatness!</u></b></h3>
            <p><i>"Our mission is to create software that will be accessible to as many of our countrymen as possible"</i></p>
           <p>Talk to us, we'd love to hear from you!</p>

            <p><b>Email our CEO for any feedback: </b></p>
            <p><span class="badge badge-light"><img src="email4.png" alt=""></span> <a href="mailto:waziullah@live.com" target="_top">waziullah@live.com</a></p>

            
        </div>

        <div class="col-sm-1" ></div>
    </div>
    </div>

    
   
    
    
</body>
</html>