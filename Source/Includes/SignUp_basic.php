<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* the sign up of the basic center
 * 
 */
include 'Config/dataSource.php';

$error=array();
// get the sign up
if (isset($_POST[""]))
    {
    
    if (!empty($pass)<6){
        array_push($error,"Pasword must not be less than 6 string");
    }
    if(count($error)==0){
        
       $sql="Insert into 'tabel-name' () values()";
      $result= $conn->query($sql);
      if ($conn->fetch_assoc($result)){
         $_SESSION=$email; 
      }
       
       
    }
}