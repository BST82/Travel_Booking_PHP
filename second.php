<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php website</title>
</head>
<style>  
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.container{
    max-width:80%;
    background-color:rgb(177, 231, 98);
    margin:auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
        <h1>Learn PHP </h1>
        <p>Your work status is here</p>
        <?php
      $age=7;
      if($age>18){
        echo "You can go to party";
      }else if($age=7){
        echo "You are at this age to attend school";
      }
      else {
        echo "You can't go to party";
      }
      // array in php 
       echo "<br>";
      $langu =array("c++","javascript","php","nodejs");
      echo $langu[1];
      echo "<br> this is count function";
      echo "<br>";
      echo count($langu);
         echo "<br> this is loop property <br>";
      // loops in php 
          $a=0;
      while ($a <= 10){
        echo "<br> The value of a is: ";
        echo $a;
        $a++;
        

      }
      
      // while loop with array

      echo "<br>" ;
      echo "Arry print with while<br>";
      $b=0;
      while($b< count($langu)){
        echo "<br>the value of array ";
        echo $langu[$b];
        $b++;
      }

      echo "<br> lets play with for loop";
      for($z=0;$z<=5;$z++){
        echo "<br>the value of z : ";
        echo $z;
      }

      // function in php 
      echo "<br>";
      function print4(){
        echo "<br>Hey! BST ";
      }
      print4();

      echo "<br>";
      function print6($num){
         echo "<br>Your number is: ";
         echo $num;
      }
      print6(10);
      print6(20);
      print6(30);
        ?>

        
</div>
</body>
</html>