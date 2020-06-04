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
    <div class="container-fluid">
    <div class="row mx-auto">
        <div class="col-sm-2"></div>

        <div class="col-sm">
            
                <br>
            <?php
                if(!isset($_GET['login'])){
                    exit();
                }

                else{
                    $login=$_GET['login'];
                    if($login=='showlogin'){  ?>
                        <br><br>
                        <p style="text-align: center"><b><u>Enter details below to proceed:</u></b></p><br>

                        <form action="../phpscripts/logincheck.php" method="POST">   <!--loginform-->
                                <div class="form-group">
                                    <label for="user">*Username:</label>
                                    <input type="text" name="user" class="form-control form-control-sm" required='required'><br>
                                    <label for="pass">*Password:</label>
                                    <input type="password" name="pass" class="form-control form-control-sm" required='required'>
                                </div>
                            <button type="submit" class="btn" name="loginreg">Log in</button>
                        </form>
                        <br><br><br><br>
                        
            <?php 

                    }
                    elseif($login=='showsignup'){ ?>
                        <br><br>
                        <h1><p><u>Join us today and make a difference!</u></p></h1><hr>
                            <br>
                        <form action="../phpscripts/logincheck.php" class="form-inline" method="POST"> <!--Chooseregtype-->
                                <div class="form-group">
                                    <label for="usertype" class="mr-sm-2">Tell us who you are:</label>
                                    <select name="usertype" id="seltype" class="form-control form-control-sm mr-sm-2">
                                        <option value="donortype">Donor</option>
                                        <option value="orgtype">Organization</option>
                                        <option value="admintype">Administrator</option>
                                    </select>
                                </div>
                        
                                <button type="submit" class="btn" name="typebtn">Okay</button>
                                    
                            </form>
                      
            <?php   
                    }
                    elseif($login=='donorreg'){ ?>
                        <br><br>
                        <h1><p><u>Join us today and make a difference!</u></p></h1><hr>
                            <br>
                            <form action="../phpscripts/logincheck.php" class="form-inline" method="POST"> <!--Chooseregtype-->
                                <div class="form-group">
                                    <label for="usertype" class="mr-sm-2">Tell us who you are:</label>
                                    <select name="usertype" id="seltype" class="form-control form-control-sm mr-sm-2">
                                        <option value="donortype">Donor</option>
                                        <option value="orgtype">Organization</option>
                                        <option value="admintype">Administrator</option>
                                    </select>
                                </div>
                        
                                <button type="submit" class="btn" name="typebtn">Okay</button>
                            </form>
                            <br><br>
                            <p style="text-align: center"><u><b>Enter details below to proceed:</b></u></p><br>
                            <form action="../phpscripts/logincheck.php" method="POST" id="form"> <!--donor signup form-->
                                <div class="form-group">

                                    <label for="user">Username:</label>
                                    <input type="text" name="user" class="form-control form-control-sm" required='required'><br>
                                    <label for="pass">Password:</label>
                                    <input type="password" name="pass" class="form-control form-control-sm" required='required'><br>
                                    
                                    <label for="fname">First Name:</label>
                                    <input type="text" name="fname" class="form-control form-control-sm" required='required'><br>
                                    <label for="lname">Last Name:</label>
                                    <input type="text" name="lname" class="form-control form-control-sm" required='required'><br>
                                    <label for="email">Email ID:</label>
                                    <input type="text" name="email" class="form-control form-control-sm" required='required'><br>
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control form-control-sm" required='required'><br>
                                    <label for="houseno">House Number:</label>
                                    <input type="text" name="houseno" class="form-control form-control-sm" required='required'><br>
                                    <label for="street">Street:</label>
                                    <input type="text" name="street" class="form-control form-control-sm" required='required'><br>
                                    <label for="area">Area:</label>
                                    <input type="text" name="area" class="form-control form-control-sm" required='required'><br>
                                    <label for="city">City:</label>
                                    <input type="text" name="city" class="form-control form-control-sm" required='required'><br>
                                    <label for="postal">Postal Code:</label>
                                    <input type="text" name="postal" class="form-control form-control-sm" required='required'><br>
                                    <label for="bloodgroup">Blood Group:</label>
                                    <select name="bloodgroup" id="seltype" class="form-control form-control-sm mr-sm-2">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>   
                                        </select><br>
                                    <label for="cpass">Confirm Password:</label>
                                    <input type="password" name="cpass" class="form-control form-control-sm" required='required'><br>
                                       
                                </div>
                            <button type="submit" class="btn" name="donorreg">Create Donor Account</button>
                        </form><br><br><br><br>

            <?php   }

                    elseif($login=='orgreg'){ ?>
<br><br>
                        <h1><p><u>Join us today and make a difference!</u></p></h1><hr>
                        <br>

                        <form action="../phpscripts/logincheck.php" class="form-inline" method="POST"> <!--Chooseregtype-->
                                <div class="form-group">
                                    <label for="usertype" class="mr-sm-2">Tell us who you are:</label>
                                    <select name="usertype" id="seltype" class="form-control form-control-sm mr-sm-2">
                                        <option value="orgtype">Organization</option>
                                        <option value="donortype">Donor</option>
                                        <option value="admintype">Administrator</option>
                                    </select>
                                </div>
                        
                                <button type="submit" class="btn" name="typebtn">Okay</button>
                            </form>
                            <br><br>
                            <p style="text-align: center"><u><b>Enter details below to proceed:</b></u></p><br>

                        <form action="../phpscripts/logincheck.php" method="POST"> <!--org signup form-->
                        <div class="form-group">

                            <label for="user">Username:</label>
                            <input type="text" name="user" class="form-control form-control-sm" required='required'><br>
                            <label for="pass">Password:</label>
                            <input type="password" name="pass" class="form-control form-control-sm" required='required'><br>
                            

                            <label for="fname">Owner's fisrt name:</label>
                            <input type="text" name="fname" class="form-control form-control-sm" required='required'><br>
                            <label for="lname">Owner's last name:</label>
                            <input type="text" name="lname" class="form-control form-control-sm" required='required'><br>
                            <label for="ophone">Owner Phone No.:</label>
                            <input type="text" name="ophone" class="form-control form-control-sm" required='required'><br>

                            <label for="cname">Company Name:</label>
                            <input type="text" name="cname" class="form-control form-control-sm" required='required'><br>
                            <label for="cname">Company Phone No.:</label>
                            <input type="text" name="cphone" class="form-control form-control-sm" required='required'><br>
                            
                            <label for="houseno">Company House No.:</label>
                            <input type="text" name="houseno" class="form-control form-control-sm" required='required'><br>
                            <label for="street">Street:</label>
                            <input type="text" name="street" class="form-control form-control-sm" required='required'><br>
                            <label for="area">Area:</label>
                            <input type="text" name="area" class="form-control form-control-sm" required='required'><br>
                            <label for="city">City:</label>
                            <input type="text" name="city" class="form-control form-control-sm" required='required'><br>
                            <label for="postal">Postal Code:</label>
                            <input type="text" name="postal" class="form-control form-control-sm" required='required'><br>
                            <label for="cpass">Confirm Password:</label>
                            <input type="password" name="cpass" class="form-control form-control-sm" required='required'><br> 
                                
                        </div>
                    <button type="submit" class="btn" name="orgreg">Create Organization Account</button>
                </form><br><br><br><br>
              <?php      }
                    elseif($login=='adminreg'){ ?>
<br><br>
                            <h1><p><u>Join us today and make a difference!</u></p></h1><hr>
                            <br>
                            <form action="../phpscripts/logincheck.php" class="form-inline" method="POST"> <!--Chooseregtype-->
                                <div class="form-group">
                                    <label for="usertype" class="mr-sm-2">Tell us who you are:</label>
                                    <select name="usertype" id="seltype" class="form-control form-control-sm mr-sm-2">
                                        <option value="admintype">Administrator</option>
                                        <option value="donortype">Donor</option>
                                        <option value="orgtype">Organization</option>   
                                    </select>
                                </div>
                        
                                <button type="submit" class="btn" name="typebtn">Okay</button>
                            </form>
                            <br><br>
                            <p style="text-align: center"><u><b>Enter details below to proceed:</b></u></p><br>
                            <form action="../phpscripts/logincheck.php" method="POST"> <!--admin signup form-->
                                <div class="form-group">

                                    <label for="user">Username:</label>
                                    <input type="text" name="user" class="form-control form-control-sm" required='required'><br>
                                    <label for="pass">Password:</label>
                                    <input type="password" name="pass" class="form-control form-control-sm" required='required'><br>
                                   
                                    <label for="fname">First Name:</label>
                                    <input type="text" name="fname" class="form-control form-control-sm" required='required'><br>
                                    <label for="lname">Last Name:</label>
                                    <input type="text" name="lname" class="form-control form-control-sm" required='required'><br>
                                    <label for="email">Email ID:</label>
                                    <input type="text" name="email" class="form-control form-control-sm" required='required'><br>
                                    <label for="scode">Enter the special company code:</label>
                                    <input type="text" name="scode" class="form-control form-control-sm" required='required'><br>
                                    <label for="cpass">Confirm Password:</label>
                                    <input type="password" name="cpass" class="form-control form-control-sm" required='required'><br>
                                      
                                </div>
                            <button type="submit" class="btn" name="adminreg">Create Administrator Account</button>
                        </form><br><br><br><br>

            <?php  }
                } ?>


            
        </div>

        <div class="col-sm-2"></div>
    </div> </div>
        
    
</body>
</html>