<?php
$insert=false;

  if(isset($_POST['name'])){
    

 $server="localhost";
 $username="root";
 $password="";

 $con = mysqli_connect( $server, $username,$password);

 if(!$con){
     die("connection to this database failed due to " .mysqli_connect_error());
 }
// echo"success connectiong  to db";
$name= $_POST['name'];
$gender= $_POST['gender'];
$age= $_POST['age'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$desc= $_POST['desc'];

$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

 // echo $sql;

if($con->query($sql)==true){
   // echo "successfully inserted!";
   $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
    <title>registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="q.jpeg" alt="q" class="q">
    <div class="container">
        <h1>welcome to BCE patna</h1>
        <p>fill this form for registration process:</p>
      <?php  
      if($insert==true){
           echo "<p class='submitmsg'>Thanks for submitting your form!</p>";
      }
      ?>
     
        <form action="index.php" method="post">
          <input type="text" name="name" id="name" placeholder="enter your name">
          <input type="text" name="age" id="age" placeholder="enter your age">
          <input type="text" name="gender" id="gender" placeholder="enter yor gender">
          <input type="email" name="email" id="email" placeholder="enter your email">
          <input type="phone" name="phone" id="phone" placeholder="enter yout phone">
          <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other info."></textarea>
         <button class="btn">submit</button>
        



        </form>


    </div>
    <script src="index.js"></script>
 
</body>
</html>