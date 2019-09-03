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


$(document).ready(function(){
  $("form#main_input_box").submit(function(event){
  event.preventDefault();

  var deleteButton = "<button class='delete btn btn-danger'>Delete</button>";

  var editButton = "<button class='edit btn btn-warning'>Edit</button>";
  
  var twoButtons = "<div class='btn-group pull-right'>" + deleteButton + editButton + "</div>";

  var checkBox = "<div class='checkbox'><label><input type='checkbox' class='pull-right'></label></div>";

  $(".list_of_items").append("<li class='list-group-item'>" + "<div class='text_holder'>" + $("#custom_textbox").val() + twoButtons + "</div>" + checkBox + "</li>");

  $("#custom_textbox").val('');

  });

   
  
  $(".list_of_items").on("click", "button.delete", function(){
  
  $(this).closest("li").remove();
  
  });
  
   
  
  $(".list_of_items").on("click", "button.edit", function (){
  
  var editItemBox = "<form class='edit_input_box'><input type='text' class='itembox'></form>";
  
  var originalItem = $(this).parent().val();
  
  var deleteButton = "<button class='delete btn btn-danger'>Delete</button>";
  
  var editButton = "<button class='edit btn btn-warning'>Edit</button>";
  
  var twoButtons = "<div class='btn-group pull-right'>" + deleteButton + editButton + "</div>";
  
  $(this).closest("div.text_holder").replaceWith(editItemBox);
  
  $("form.edit_input_box ").on("submit", function(){
  
  event.preventDefault();
  
  var checkBox = "<label><input type='checkbox'></label>";
  
  $(this).replaceWith("<div>" + $(".itembox").val() + twoButtons + "</div>");
  
  });
  
  });
  
   
  
  $(".list_of_items").on("click", ":checkbox", function (){
  
  $(this).closest("li").toggleClass("completed_item");
  
  });
  33
  });
  

// Toggle between hiding and showing to do app replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}




// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  };
};

///Scroll function for the navbar

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
};