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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <script src="jquery-3.3.1.min.js"></script>
  </head>

<body>

<div class="header1">
  <h2>Plan Your Day Accordingly</h2>
  <p>your day should have no regrets plan it, to do list it.</p>
</div>

<!--navbar-->
<div id="navbar">
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">News</a>
  <a href="javascript:void(0)">Contact</a>
</div>

<!---creating the form-->
  <div class="container" id="main">
<h1>Essential To-Do List</h1>

<form role ="form" id="main_input_box">

<label>

<input type="text" class ="form-control" id="custom_textbox" name="Item" placeholder="What do you need to do?">

<input type="submit" value="Add" class="btn btn-basic add_button">
</label>

</form>

<form>

<ol class="list-group list_of_items">

</ol>
</form>

</div>


<!--to isset and displaylist
<?php
if($_POST){
    $any = $_POST['Item'];
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


 //start the echo of unorderd list//
 
  echo "<ul>";
  foreach($_SESSION['items'] as $item){
      echo "<li id=\"do\">".$item."</li><br>";
  };
  echo "</ul>";
  
}




       
?>


    <! Subscribe Modal -->
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
</body>

<script src="js/main.js"></script>
</html>
