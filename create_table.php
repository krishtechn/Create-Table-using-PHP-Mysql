<?php 

   $localhost = 'localhost';
   $username = 'root';
   $password = '';
   $databasename = 'class';
   $localhost = 'localhost';

   $con = mysqli_connect($localhost,$username,$password,$databasename) or die("connection failed");


//     if database is incorrect then error 

   if(!$con){
         echo "connection failed" .mysqli_connect_error();
   }else{
         echo "connection success";
   }

    
//    then we write sql query to creat table 

  $sql = "CREATE TABLE student(
        id int PRIMARY KEY,
        name varchar(255) not null unique,
        class varchar(255) not null,
        roll int unique
  )";

//   in result first we connect from database then we insert sql query
  
  $result = mysqli_query($con,$sql);


  if($result){
        echo "Table is created";
  }else{
        echo "Table is already created" .mysqli_error($con);
  }


?>