<?php
ob_start();
include ('dbcon.php');
if(!empty($_REQUEST['submitBtn']))
{
  $firstname=$_REQUEST['fname'];
  $lastname=$_REQUEST['lname'];
  $email=$_REQUEST['email'];
  $password=$_REQUEST['pwd']; //to encry password use md5($_REQUEST['pwd']);
  $phone=$_REQUEST['phone'];
  $address=$_REQUEST['address'];
  $sql="INSERT INTO reg VALUES('','$firstname','$lastname','$email','$password','$phone','$address')";
  mysql_query($sql);
  echo "REGISTERED";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="ext.css">
  <link rel="stylesheet" type="text/css" href="logq.css">
  <link rel="stylesheet" type="text/css" href="contas.css">
</head>
<body>
<div id="content">
<form class="modal-content animate" method="POST" style="width: 500px;">
    <div class="container">
<table align="center" style="width: 100%">
    <td align="left">First Name</td>
    <td><input type="text" name="fname"></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="lname"></td>
  </tr>
  <tr>
    <td>Email Id</td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="pwd"></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input type="text" name="phone"></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea name="address" id="" cols="18" rows="5"></textarea></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" class="cancelbtn" name="submitBtn" value="REGISTER"></td>
    <td><a href="homepage.html"><button align="right" type="button" onclick="document.getElementById('id01').style.display='lnone'" class="cancelbtn">Cancel</button></a></td>
  </tr>
</table>
    </div>
</form>
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

