<?php

//include statement for db.
include '../dbconn.php';
include '../listfunctions.php';

if(isset($_POST['loginreg'])){
    $fname=$_POST['fname']; $phone=$_POST['phone'];$location=$_POST['location'];$bloodgrp=$_POST['bloodgrp'];$date=$_POST['date'];$quantity=$_POST['quantity'];
    $postid=1234;
    $sql="INSERT INTO `posts`(`postid`, `fname`, `phone`, `location`, `quantity`, `status`, `date`, `bloodgroup`) VALUES (
        '1234','$fname','$phone','$location','$quantity','new','$date','$bloodgrp'
    )";
    $result=mysqli_query($conn,$sql);

    header("Location:../htmlfiles/index.php");
}
if(isset($_POST['loginregdonor'])){
    $fname=$_POST['fname']; $phone=$_POST['phone'];$location=$_POST['location'];$bloodgrp=$_POST['bloodgrp'];$date=$_POST['date'];$quantity=$_POST['quantity'];
    $postid=1234;
    $sql="INSERT INTO `posts`(`postid`, `fname`, `phone`, `location`, `quantity`, `status`, `date`, `bloodgroup`) VALUES (
        '1234','$fname','$phone','$location','$quantity','new','$date','$bloodgrp'
    )";
    $result=mysqli_query($conn,$sql);
    
    header("Location:../htmlfiles/donor.php");
}
if(isset($_POST['loginregadmin'])){
    $fname=$_POST['fname']; $phone=$_POST['phone'];$location=$_POST['location'];$bloodgrp=$_POST['bloodgrp'];$date=$_POST['date'];$quantity=$_POST['quantity'];
    $postid=1234;
    $sql="INSERT INTO `posts`(`postid`, `fname`, `phone`, `location`, `quantity`, `status`, `date`, `bloodgroup`) VALUES (
        '1234','$fname','$phone','$location','$quantity','new','$date','$bloodgrp'
    )";
    $result=mysqli_query($conn,$sql);
    
    header("Location:../htmlfiles/admin.php");
}
if(isset($_POST['loginregorganization'])){
    $fname=$_POST['fname']; $phone=$_POST['phone'];$location=$_POST['location'];$bloodgrp=$_POST['bloodgrp'];$date=$_POST['date'];$quantity=$_POST['quantity'];
    $postid=1234;
    $sql="INSERT INTO `posts`(`postid`, `fname`, `phone`, `location`, `quantity`, `status`, `date`, `bloodgroup`) VALUES (
        '1234','$fname','$phone','$location','$quantity','new','$date','$bloodgrp'
    )";
    $result=mysqli_query($conn,$sql);
    
    header("Location:../htmlfiles/organization.php");
}


//rest of the code.

//is empty fucntions

//parsers


//sql statement

//run query