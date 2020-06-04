<?php
include '../dbconn.php';

function makeitrain($condition){  //opens the navbar.  

    if($condition=='active'){ ?>
        <div class="row">
       
            <div class="container-fluid">

                <nav class="navbar navbar-expand-sm  bg-dark fixed-top">

                    <ul class="navbar-nav mr-auto ">
                        
                        <li class="nav-item"><a class="nav-link" href="index.php">My Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="makepost.php ">Make a Post</a></li>
                        <li class="nav-item"><a class="nav-link" href="people.php">People</a></li>
                        <li class="nav-item"><a class="nav-link" href="inventory.php">Inventory</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="settings.php">Settings</a></li>

                    </ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="../phpscripts/logincheck.php?login=logout1" class="nav-link">Log-out</a></li>
                        
                    </ul>
                </nav>
            </div>
    </div>
 <?php   }

    elseif($condition=='inactive'){ ?>
             
        
        <div class="row">
       
            <div class="container-fluid">

                <nav class="navbar navbar-expand-sm  bg-dark fixed-top">

                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="makepost.php ">Make a Post</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php ">Contact Us</a></li>
                        

                    </ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="login.php?login=showlogin" class="nav-link">Log-in</a></li>
                        <li class="nav-item"><a href="login.php?login=showsignup" class="nav-link">Sign-up</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-target="loginmodal" data-toggle="modal">Login</a></li>
                    </ul>

                </nav>
                 
               
            </div>
    </div>
<?php    }
}
function containspaces($input){
    
    for($i=0;$i=strlen($input);$i++){
        if($input[$i]=" "){
            $ret='true';
            return $ret;
        }
    }
}
?>