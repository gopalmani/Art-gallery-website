<?php 
ob_start();
require('dbcon.php');
if(!empty($_REQUEST['loginbtn'])||(!empty($_COOKIE['uname']) && !empty($_COOKIE['pass'])))
{
  $username= $_REQUEST['uname'];
  $password= $_REQUEST['pass'];
if(!empty($_COOKIE['uname']) && !empty($_COOKIE['pass']))
{
  $username= $_COOKIE['uname'];
  $password= $_COOKIE['pass'];
}
  $sql= "SELECT email,password,first_name,user_id FROM reg WHERE email='$username' AND password='$password'";
  $result= mysql_query($sql) or die(mysql_error());
  $rws = mysql_fetch_array($result) or die(mysql_error());
    if($username==$rws[0]&&$password==$rws[1])
    {
      if($_REQUEST['cbox']==1)
      {
        setcookie('uname',$username,time()+3600);
        setcookie('pass',$password,time()+3600);
        $_COOKE['uname'] = $username;
        $_COOKE['password']= $password;
      }
      $_SESSION['values'] = array($rws[3],$rws[2]);
      header('Location:./logedin.php');
    }
}

?>
<!DOCTYPE html>
<html>
<title>MEMBER LOGIN PAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="ext.css">
  <link rel="stylesheet" type="text/css" href="logq.css">
  <link rel="stylesheet" type="text/css" href="contas.css">
<body>
<div id="content">  
  <form class="modal-content animate" method="POST">
<div class="container">
      <label><span><b>Email</b></span></label>
      <input type="text" placeholder="Enter Email" name="uname" required>

      <label><br><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
<input type="submit" name="loginbtn" value="LOGIN">
      <input type="checkbox" name="cbox" value="1"> Remember me
    </div>
  </form>
</div>
  </div>
</div>
<!-- script -->
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
            
</body>
</html>
