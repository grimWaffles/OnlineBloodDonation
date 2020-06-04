<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donor</title>
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
    <!--accountmodal-->
    <div class="modal fade" id="accountmodal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            
                                                    <h3>View account information</h3>
                                                </div>
                                                <div class="modal-body">
                                                <a href="../phpscripts/logincheck.php?login=logout1" class="nav-link">Log-out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

    <!--end acc modal-->
    <br>
    <div class="container-fluid">
    <div class="row mx-auto">

    <!--navbar-->
    <nav class="navbar navbar-expand-sm  bg-dark fixed-top">

                    <ul class="navbar-nav mr-auto"> 
                        <li class="nav-item"><a class="nav-link" href="admin.php">My Dashboard</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-target="#postmodal" data-toggle="modal">Make a post</a></li>
                        <li class="nav-item"><a class="nav-link" href="responses.php">Responses</a></li>
                        
                    </ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link" data-target="#accountmodal" data-toggle="modal">Account</a></li>
                    </ul>
    </nav>

    <!--end navbar-->

    <!--mainbody-->
        <div class="col-sm-1"  ></div>

        <div class="col-sm-10">
            
        <br><br>
             <?php
             include '../dbconn.php';
               $sql="SELECT postid, fname, phone,location, quantity, status, date, bloodgroup FROM posts";
               $result=mysqli_query($conn,$sql);

            ?>
            
            <?php    while($row=mysqli_fetch_assoc($result)){ ?>
                        
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['bloodgroup']." blood required"; ?></h5> <hr>
                        <br>

                        <p class="card-text"><?php echo "@ ".$row['location']." hospital" ?></p>
                        <p class="card-text"><?php echo $row['fname'] ?></p>
                        <p class="card-text"><?php echo $row['phone'] ?></p>
                        <p class="card-text"><?php echo $row['quantity']." bags" ?></p>
                        <p class="card-text"><?php echo "Needed by: ".$row['date'] ?></p>

                        <a href="#" class="card-link"><b>Email</b></a>
                    </div>
                 </div>

             <?php   } ?>
            
        </div>

        <div class="col-sm-1" ></div>
    </div>
    </div> 

    
   
    
    




</body>
</html>