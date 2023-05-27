<?php 
$username="";
$password="";
$conn= mysqli_connect('localhost','root','','cv_portal');
if(isset($_POST['submit']))
 {
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
 }
$query="SELECT * FROM `users` WHERE `username` ='$username' AND `password` ='$password'";
$check_user=mysqli_query($conn, $query);
if(mysqli_num_rows($check_user))
{
  echo"welcome to your profile";
}
else
{
  $_SESSION['message']='This user not exist!';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>jobie</title>
</head>
<body style="background-color: #a6b7ca;">
  <header style="background-color: #171a22">
    <nav class="navbar navbar-expand-lg navbar-light ">
            <!-- Menu bar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" style="color: rgb(255, 255, 255);">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: rgb(255, 255, 255);">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: rgb(255, 255, 255);">CV</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: rgb(255, 255, 255);">CONTACT US</a>
                    </li>
                </ul>
            </div>
            </div>           
         </div> 
    </nav>
</header>
    <form action="userreg.php" method="post">
      <div>
        <div class="login">
          <img src="img4.avif" alt="" style="width: 994px;height: 702px;">
          <label for="username"><b>Username:</b></label><br>
          <input type="text" placeholder="Enter Username" id="username" name="username" required><br>
          <label for="password"><b>Password:</b></label><br>
          <input type="password" placeholder="Enter Password" id="password" name="password" required><br><br>
          
          <label style="padding-right: 75px; " >
            <h6><input type="checkbox" checked="checked" name="remember" style="font-size: smaller; color: #230852;">Remember me</h6>
          </label>
          <button type="submit" name="submit" ><a href="cvform.php">Login</a></button>
        </div>
      </div>
      <div class="login1"  style="margin-top: 0px;text-decoration: none;"><br>
        <span class="psw" style="padding-right: 20px;">Forgot <a href="#">password?</a></span>
        <span class="reg" style="padding-left: 550px; font-size: large; font-weight: bold;"> <a href="userreg.php">REGISTRATION</a></span>
      </div>
      
       
      </form>
      <footer> <!-- The last section -->
        <div class="fluid-container">
            <div class="footer"> <!-- contact with us -->
                <ol class=" breadcrumb" style="--bs-breadcrumb-divider:'|';">
                    <li class="breadcrumb-item"><a href="https://www.facebook.com/">FACEBOOK</a></li>
                    <li class="breadcrumb-item"><a href="https://www.twitter.com/">TWITTER</a></li>
                    <li class="breadcrumb-item"><a href="https://www.behance.net/">BEHANCE</a></li>
                    <li class="breadcrumb-item"><a href="https://www.linkedin.com/">LINKEDIN</a></li>
                    <li class="breadcrumb-item"><a href="https://dribbble.com/">DRIBBLE</a></li>
                </ol>
                <br><hr style="color: white;"><br>
                
            </div>
        </div>
    </footer>
</body>
</html>