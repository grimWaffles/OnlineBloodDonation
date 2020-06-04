<?php
//include statement for db.
include '../dbconn.php';
include '../htmlfiles/listfunctions.php';

//login.php signupfrom selector
if(isset($_POST['typebtn'])){
    $typebtn=$_POST['usertype'];

    if($typebtn==donortype){
        header("Location: ../htmlfiles/login.php?login=donorreg");
    }
    elseif($typebtn==orgtype){
        header("Location: ../htmlfiles/login.php?login=orgreg");
    }
    elseif($typebtn==admintype){
        header("Location: ../htmlfiles/login.php?login=adminreg");
    }
}

//login checker| comes from listfunctions.php
if(isset($_POST['loginreg'])){
    $username=$_POST['user']; $pass=$_POST['pass'];
    
    $sql1="SELECT username,pass, type, astatus FROM userlogin WHERE username='$username' AND pass='$pass' ;";
    $result1=mysqli_query($conn, $sql1);
    $sql2=" UPDATE userlogin SET astatus = 'active' WHERE username= '$username' AND pass = '$pass' ";
    $result=mysqli_query($conn,$sql2);

    $num_rows=mysqli_num_rows($result1);

    if($num_rows==1){
        while($row=mysqli_fetch_assoc($result1)){
            if($row['type']=='admin'){
               
                header("Location: ../htmlfiles/admin.php");
            }
            elseif($row['type']=='organization'){
                $sql2=" UPDATE userlogin SET astatus = 'active' WHERE username= '$username' AND pass = '$pass' ";
                $result=mysqli_query($conn,$sql2);
                header("Location: ../htmlfiles/organization.php");
            }
            elseif($row['type']=='donor'){
                $sql2=" UPDATE userlogin SET astatus = 'active' WHERE username= '$username' AND pass = '$pass' ";
                $result=mysqli_query($conn,$sql2);
                header("Location: ../htmlfiles/donor.php");
            }

        }
        
    }
    elseif($num_rows==0){
        echo "user does not exist";
    }
}
//logout checker| comes from listfunctions.php
if(isset($_GET['login'])){
    $login=$_GET['login'];
    if($login='logout1'){
        $sql="UPDATE userlogin SET astatus='inactive' WHERE astatus='active'";
        header("Location: ../htmlfiles/index.php");
    }
}
if(isset($_POST['donorreg'])){  //CHECKER FOR DONORREGISTRATION

    //take form inputs into variables
    $user=$_POST['user'];$pass=$_POST['pass'];
    $fname=$_POST['fname']; $lname=$_POST['lname']; $email=$_POST['email'];
    $phone=$_POST['phone']; $houseno=$_POST['houseno']; $street=$_POST['street'];
    $area=$_POST['area']; $city=$_POST['city']; 
    $postal=$_POST['postal']; $bloodgroup=$_POST['bloodgroup']; $cpass=$_POST['cpass'];
    $true='true';
    //check for input type
        //check for spaces
    
    
        //check for caps in names
    if( preg_match("/^[A-Z]*$/",$fname) && preg_match("/^[A-Z]*$/",$lname) && preg_match("/^[A-Z]*$/",$street) && preg_match("/^[A-Z]*$/",$area) && preg_match("/^[A-Z]*$/",$city) ){
        if( preg_match("/^[0-9]*$/",$phone) && preg_match("/^[0-9]*$/",$postal) ){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                if($pass==$cpass){
                    $sql="INSERT INTO donorlist(username, pass, fname, lname, email, phone, houseno, street, area, city, postal, bloodgroup) VALUES ('$user','$pass','$fname','$lname','$email','$phone','$houseno','$street','$area','$city','$postal','$bloodgroup');";
                    $result=mysqli_query($conn,$sql);
                    $sql3="INSERT INTO userlogin(username, pass, astatus, type) VALUES ('$user','$pass','inactive','donor')";
                    $result=mysqli_query($conn,$sql3);
                    header("Location:../htmlfiles/index.php");
                }
                else{
                    echo "passwords do not match";
                }
            }
            else{
                echo "ypu have invalid email";
            }
        }
        else{
            echo "phone enumbers should match";
        }
    }
    else{
        echo "names cant have numbers";
    }
        //check for number
    
        //validate email
    
        //check for correct combos  
}

if(isset($_POST['orgreg'])){
    //fetch values
    $user=$_POST['user'];$pass=$_POST['pass'];
    $fname=$_POST['fname']; $lname=$_POST['lname']; $ophone=$_POST['ophone'];$cname=$_POST['cname'];
    $cphone=$_POST['cphone']; $houseno=$_POST['houseno']; $street=$_POST['street'];
    $area=$_POST['area']; $city=$_POST['city']; 
    $postal=$_POST['postal'];  $cpass=$_POST['cpass'];
    $true='true';
    //check spaces
    if( preg_match("/^[A-Z]*$/",$fname) && preg_match("/^[A-Z]*$/",$lname) && preg_match("/^[A-Z]*$/",$street) && preg_match("/^[A-Z]*$/",$area) && preg_match("/^[A-Z]*$/",$city) && preg_match("/^[A-Z]*$/",$cname) ){
        if( preg_match("/^[0-9]*$/",$ophone) && preg_match("/^[0-9]*$/",$postal) && preg_match("/^[0-9]*$/",$cphone)  ){
             
                if($pass==$cpass){
                    $sql="INSERT INTO organization(username, pass, fname, lname, ophone, cname, cphone, houseno, street, area, city, postal)
                     VALUES ('$user','$pass','$fname','$lname','$ophone','$cname','$cphone','$houseno','$street','$area','$city','$postal')";
                    $result=mysqli_query($conn,$sql);
                    $sql3="INSERT INTO userlogin(username, pass, astatus, type) VALUES ('$user','$pass','inactive','organization')";
                    $result=mysqli_query($conn,$sql3);
                    header("Location:../htmlfiles/index.php");
                }
                else{
                    echo "passwords do not match";
                }
        }
        else{
            echo "phone enumbers should match";
        }
    }
    else{
        echo "names cant have numbers";
    }
    //check correct format
    
}

if(isset($_POST['adminreg'])){
    //fetch values
    $user=$_POST['user'];$pass=$_POST['pass'];
    $fname=$_POST['fname']; $lname=$_POST['lname']; $email=$_POST['email'];
    
    $scode=$_POST['scode'];  $cpass=$_POST['cpass'];
    $true='true';
    //check spaces 

    //check correct format
    if( preg_match("/^[A-Z]*$/",$fname) && preg_match("/^[A-Z]*$/",$lname) ){
        if( preg_match("/^[0-9]*$/",$scode)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                if($pass==$cpass){
                    if($scode=='0101'){
                        $sql="INSERT INTO adminstrator(username, pass, fname, lname, email, scode)
                         VALUES ('$user','$pass','$fname','$lname','$email','$scode') ";
                        $result=mysqli_query($conn,$sql);
                        $sql3="INSERT INTO userlogin(username, pass, astatus, type) VALUES ('$user','$pass','inactive','admin')";
                        $result=mysqli_query($conn,$sql3);
                        header("Location:../htmlfiles/index.php");
                    }
                    else{
                        echo "Wrong company code";
                    }
                }
                else{
                    echo "passwords do not match";
                }
            }
            else{
                echo "you have invalid email";
            }
        }
        else{
            echo "phone enumbers should match";
        }
    }
    else{
        echo "names cant have numbers";
    }
}




//rest of the code.

//is empty fucntions not needed 

//parsers


//sql statement

//run query
