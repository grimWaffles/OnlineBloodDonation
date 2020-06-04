<?php

include 'connect.php';


//insert values
if (isset($_POST['register'])){
    
    $uid=$_POST['uid'];
    $name=$_POST['name'];
    $sub=$_POST['sub'];
    $credits=$_POST['credits'];

    $sql="INSERT into test(ID, Name,Subject, Credit)
    VALUES(
        '$uid',
        '$name',
        '$sub',
        '$credits')";
    
    $result=mysqli_query($conn,$sql);
    }

//delete values

    elseif (isset($_POST['delete'])) {
        $sname=$_POST['nametodelete'];
        $sql="DELETE FROM `test` WHERE `Name`='$sname'";
        $result=mysqli_query($conn,$sql);

        echo "Deleted Successfully ";
        header("Location: settings.php");
    }


//view values
elseif (isset($_POST['view']) ) {
    $subject=$_POST['viewSubject'];
    $sql="SELECT `ID`, `Name`, `Subject`, `Credit` FROM `test` WHERE `Subject`='$subject' ";
    $result=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result)){
        echo $row['ID']."   ". $row['Name']."   ". $row['Subject']."    ". $row['Credit'];
        echo "<br>";
    }

}

//modify values

elseif (isset($_POST['mod'])) {
    $name=$_POST['nametomodify'];
    $attribute=$_POST['attribute'];
    $value=$_POST['valuetochange'];

    if($attribute=="ID"){
        $sql="UPDATE `test` SET `ID`='$value' WHERE `Name`='$name' ";
        $result=mysqli_query($conn,$sql);
        echo "Modified";
        header("Location: settings.php");
    }
    elseif($attribute=="Subject"){
        $sql="UPDATE `test` SET `Subject`='$value' WHERE `Name`='$name' ";
        $result=mysqli_query($conn,$sql);
        echo "Modified";
        header("Location: settings.php");
    }

    elseif ($attribute=="Credit") {
        $sql="UPDATE `test` SET `Credit`='$value' WHERE `Name`='$name' ";
        $result=mysqli_query($conn,$sql);
        echo "Modified";
        header("Location: settings.php");
    }
    
}

//create table

elseif(isset($_POST['colbtn'])){
    $col=$_POST['noCol'];
    header("Location: SQLassignment1.php?colno=$col");
}

elseif(isset($_POST['makeit'])){
   
    $colnarr=array(); $coltarr=array(); $a=0; $b=0; $c=0; $tname=$_POST['tname'];
   
    foreach($_POST['colname'] as $value) {
        
        $colnarr[$a]= $value;
        $a++;$c++;
      }
     

      foreach($_POST['coltype'] as $value) {
        
        $coltarr[$b]= $value;
        $b++;
      }

      $sql = "CREATE TABLE $tname ( ";
        for($i=0; $i<$c; $i++){

            if($i==($c-1)){
                $sql .= "$colnarr[$i]" . " " . "$coltarr[$i]" . "(100)" ;
            }
            else{
                $sql .= "$colnarr[$i]" . " " . "$coltarr[$i]" . "(100)"."," ;
            }

        }
        $sql .= " ) ";

       mysqli_query($conn,$sql); 
}