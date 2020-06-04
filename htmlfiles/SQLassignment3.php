<?php

if(isset($_POST['create'])){

    $a=0;
    foreach($_POST['colname'] as $value) {
        // do what you want with the $value
        $colnarr[$a]= $value;
        $a++;
      }
      $b=0;
      while($b<$noCol){
        echo $colnarr[$b]."     ";
        $b++;
      }

}


//create table

elseif (isset($_POST['colbtn'])){
 
  $noCol=$_POST['noCol'];
  $colnarr=array(); 
  $coltarr=array(); ?>

  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
      

  <form action="SQLassignment2.php">
  <?php
  for($i=0;$i<$noCol;$i++){  ?>
      
   <input type="text" name="colname[]" placeholder="column"><br>
      
      </body>
      </html>



  <?php  }
  ?>

<button type="submit" name="create" value="submit6">Create</button>
</form>
<?php

if(isset($_POST['create'])){

  $a=0;
  foreach($_POST['colname[]'] as $value) {
      // do what you want with the $value
      $colnarr[$a]= $value;
      $a++;
    }
    $b=0;
    while($b<$noCol){
      echo $colnarr[$b]."     ";
      $b++;
    }

}

}
?>
