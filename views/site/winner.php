<!DOCTYPE html>

<html lang="en">
<head>
  <title> Gallery 1 Zonnemma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/winner.css" rel="stylesheet">
  
 </head>
<body>
<h2>WINNER GALLERY</h2>
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('male')"> Male</button>
  <button class="btn" onclick="filterSelection('female')">Female</button>
  <button class="btn" onclick="filterSelection('winners')"> Winners</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="pictures/mensphoto/p13.png" alt="male" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;">OPIO JAMES</h4>
      <p class="p">Jiu-jitsu, Taekwondo, Kickboxing</p>
      <h5>Ugandan</h5>
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="pictures/winnersphoto/p1.jpg" alt="Winners" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;">EUNICE AKELLO</h4>
      <p class="p">Technical KnockOut</p>
      <h5>Ugandan</h5>
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="pictures/womenphoto/p1.jpg" alt="Female" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;">NALONGO BRENDA MASENDI</h4>
      <p class="p">Taekwondo, Kickboxing</p>
      <h5>Ugandan</h5>

    </div>
  </div>

  <div class="column nature">
    <div class="content">
      <img src="pictures/mensphoto/p10.png" alt="Male" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;">Hazzard Justine Okello</h4>
      <p class="p">Taekwondo, Kickboxing</p>
      <h5>Ugandan</h5>
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="pictures/winnersphoto/p10.jpg" alt="Winners" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;">Ronald Odoch</h4>
      <p class="p">Technical KnockOut</p>
      <h5>Ugandan</h5>
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="pictures/womenphoto/p1.jpg" alt="Female" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;"> WARRIOR <br> REBECCA ISRAEL AMONGI</h4>
      <p class="p">Muay Thai, Boxing</p>
      <h5>Ugandan</h5>
 
    </div>
  </div>

  <div class="column nature">
    <div class="content">
      <img src="pictures/womenphoto/p3.jpg" alt="Female" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;"> "LIONESS"<br> JOAN NASSOLO </h4>
      <p class="p">Muay Thai</p>
      <h5>Ugandan</h5>
   
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="pictures/mensphoto/p13.png" alt="Male" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;">"THE TEACHER"<br> AHMED LUBEGA ALI</h4>
      <p class="p">Taekwondo</p>
      <h5>Ugandan</h5>

    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="pictures/mensphoto/p6.png" alt="Male" style="width:100%">
      <h4 style="text-decoration: #CE3C2D;">"BUSUNGU"<br>BONANE JOSEPH</h4>
      <p class="p">Kickboxing</p>
      <h5>Ugandan</h5>
      
   </div>
  </div>
<!-- END GRID -->
</div>
<script>
filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c === "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) === -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>