<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="art.css"  crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Art Gallery</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="meetteam.html">meet artist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.html">what's new?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.html">Gallery</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="pricing.html">Shop here</a>
          </li>
                    <li class="nav-item">
            <?php
session_start();
   require('dbcon.php');
   if(!isset($_SESSION['values']))
    header('Location:./exthome.php');
else
  {?>
<table align="right" style="color: white;width: 100%;">
  <tr>
    <td>&nbsp; &nbsp;Welcome &nbsp; &nbsp; <?php echo $_SESSION['values'][1];?></td>
    <td style="text-align: right;" align="right"><a href="homepage.html"><button class="button" type="button"><span>Sign Out</span></button></a></td>
  </tr>
</table>
<?php
}
?>

          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <br>
      <div class="row">
        <div class="col-md-4"><img src="gallery1.jpg" alt="" class="img-responsive img-thumbnail"></div>
        <div class="col-md-4"><img src="gallery2.jpg" alt="" class="img-responsive img-thumbnail"></div>
        <div class="col-md-4"><img src="gallery3.JPG" alt="" class="img-responsive img-thumbnail"></div>
        <div class="col-md-4"><img src="art1.jpg" alt="" class="img-responsive img-thumbnail"></div>
        <div class="col-md-4"><img src="gallery6.jpg" alt="" class="img-responsive img-thumbnail"></div>
        <div class="col-md-4"><img src="gallery7.jpg" alt="" class="img-responsive img-thumbnail"></div>
        <div class="col-md-4"><img src="art2.jpg" alt="" class="img-responsive img-thumbnail"></div>
        <div class="col-md-4"><img src="camera1.jpg" alt="" class="img-responsive img-thumbnail"></div>
        <div class="col-md-4"><img src="gallery8.png" alt="" class="img-responsive img-thumbnail"></div>
      </div>
    </div>
    <div class="row bg-dark navbar-dark">
      <div class="col-md-4" style="margin-left: 20px; margin-top: 20px;">
        <input type="text" name="" id="">
        <button class="btn btn-primary">Submit</button>
      </div>
      <div class="col-md-4">
        <ul style="color: white;">
          <li>visit our facebook page here : www.facebook.com/deepart</li>
          <li>follow us on instagram : www.instagram.com/deepart</li>
          <li>follow us on twitter.com/deepart</li>
        </ul>
      </div>
    </div>
    
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


    // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
</body>
</html>