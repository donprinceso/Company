<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define("dbserver","localhost");
define("dbuser","root");
define("dbkey","");
define("dbname", "companydb");

//connecting the database 
$conn =new mysqli(dbserver,dbuser,dbkey,dbname);

// check the database connection
if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
} else {
    echo 'Connection was successfully';
}



