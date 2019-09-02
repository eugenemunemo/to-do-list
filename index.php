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
    

  <!-- Bootstrap core CSS -->
 

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <!-- Custom styles for this template -->
  

</head>

<body>

<div class="header1">
  <h2>Plan Your Day Accordingly</h2>
  <p>your day should have no regrets plan it, to do list it.</p>
</div>


<div id="navbar">
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">News</a>
  <a href="javascript:void(0)">Contact</a>
</div>
<div class="content">
<div id="myDIV" class="header">
  
  <div class="app">
   <h1>PLAN: To Do List</h1>
    
  <form method="POST" action="index.php">
      
  <input type="text" name="list">
      
  <input type="submit" value="Add List">

  <span onclick="newElement()" class="addBtn"></span>
  </div>
  </div>
  
  
  </form>



   
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
    <!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">e.munemo@gmail.com</a></p>
</footer>
</body>

</html>
  


   
    <script src="js/main.js"></script>

 
</html>


