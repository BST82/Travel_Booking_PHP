<?php

$insert=false;
if(isset($_POST['Name'])){
    //set connection variables
$server ="localhost";
$username="root";
$password="secret";

//create connection
$con=mysqli_connect($server,$username,$password);

// check for connection success 
if(!$con){
    die("connection to this database failed due to ".mysqli_connect_error());
}
// echo "Success connect to database";

// collect POST variables
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Other = $_POST['Other'];

$sql = " INSERT INTO `worldtrip`.`trip` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Details`) VALUES ('$Name', ' $Age', '$Gender', '$Email', '$Phone', '$Other', current_timestamp());";


// connect with daata base and ececute the quesry
if($con->query($sql)== true){
    // echo "Successfully inserted";

    //flag for successfull insertion
    $insert=true;
}
else{
    // echo "ERROR: $sql <br> $con->error";
    $not_insert=true;
}

// close database connection
$con->close();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
   
    <title>Wellcome to travel form</title>
</head>
<body>
    <img class="bg" src="bg.jpg" alt="World Trip">
    <div class="container">
        <h1 class="font-effect-fire">Wellcome to world Trip </h1>

        <p class="font-effect-neon" > If you want to get world tour or trip then let's connect with your dream .</p>


        <?php
       
       if( $insert==true){
            echo "<p class='font-effect-shadow-multiple' > Thanks for submitting your form we will reach you soon </p>";   
            }
          ?>


        <form action="ind.php" method="post">

        <input type="text" name="Name" id="Name" placeholder="Enter your name">
        <input type="text" name="Age" id="Age" placeholder="Enter your age">
        <input type="text" name="Gender" id="Gender" placeholder="Enter your gender">
        <input type="email" name="Email" id="Email" placeholder="Enter your email">
        <input type="phone" name="Phone" id="Phone" placeholder="Enter your phone">
        <textarea name="Other" id="Other" cols="30" rows="10" placeholder="Where you want to get trip for"></textarea> 
        <button class="btn">Submit</button>
       
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>




