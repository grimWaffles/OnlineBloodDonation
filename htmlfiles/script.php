<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>
        <?php
        include '../dbconn.php';
        for($i=0;$i<2;$i++){
            $sql="INSERT INTO `posts`(`postid`, `fname`, `phone`, `location`, `quantity`, `status`, `date`, `bloodgroup`) VALUES (
                '123','wazi','0112','0112q','4','statuss','2019-12-13','B+'      
            );";
            $result=mysqli_query($conn,$sql);
            echo "success";
        }
        
        ?>
</body>
</html>