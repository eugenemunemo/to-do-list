<?php 
session_start();
//session_destroy();

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WELCOME TO YOUR TO DO LIST</title>

  <link rel="stylesheet" type="text/css" href="css/style.css">
   
    <script src="jquery-3.3.1.min.js"></script>
   
    
    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body>
<div id="myDIV" class="header">
  
  <div class="app">
   <h1>My To Do List</h1>
    
  <form method="POST" action="index.php">
      
  <input type="text" name="list">
      
  <input type="submit" value="Add List">

  <span onclick="newElement()" class="addBtn"></span>
  </div>
  </div>
  
  
  </form>
<!--if you post list statement using super globals-->
  <?php
if($_POST){
    $any = $_POST['list'];
    if(isset($_SESSION['items'])){
        $_SESSION['items'][] = $any;
        
    }else{
        $_SESSION['items'] = [];
    }

displaylist();
    
}

// this function populate the  $_SESSION//
$time = time();    
function displaylist(){
 $time = time();
 //$date = date('Y-m-d',$item);

 
  echo "<ul>";
  foreach($_SESSION['items'] as $item){
      echo "<li id=\"do\">".$item."</li><br>";
  };
  echo "</ul>";
  
}

?>
   
</body>

    <script>
 // jquery start here
$(document).ready(function(){
   var item = 0;
   $("li").each(function(c){
       $(this).click(function(){
       checked = c;
        if(item == 0){
           $(this).css("text-decoration", "line-through");
           item = 1;
           sessionStorage.setItem(checked, item);

          }else{
              $(this).css("text-decoration", "none");
              item = 0;
              sessionStorage.setItem(checked, item);
           }
       });
   });
$("li").each(function(c){
   if(sessionStorage.getItem(c)==1){
       $(this).css("text-decoration", "line-through");
   }
});
});


    </script>
    <script src="js/main.js"></script>

 
</html>


