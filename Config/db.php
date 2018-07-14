<?php

 $server="localhost";
 $user="root";
 $password_db="";
 $dbname="clouddb";

$conn=new mysqli($server,$user,$password_db,$dbname);
 
 if ($conn->connect_error){
     die("conncetion Failed:".$conn->connect_error);
 }
 else {
         echo "conncetion sucessfully"; 
     }
 

