<?php
$flag='';
 if(isset($_POST['submit']))
 {
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $conn= mysqli_connect('localhost','root','','cv_portal');
  $query=mysqli_query($conn,"INSERT INTO `users`( `name`, `surname`, `phone`, `gender`, `email`, `username`, `password`) VALUES ('$name','$surname','$phone','$gender','$email','$username','$password')");
  if($query)
  {
    $flag='1';
  }
  else
  {
    $flag='0';
  }

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userreg.html">
    <title>Document</title>
    <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f2f2f2;
          padding: 20px;
        }
    
        h1 {
          text-align: center;
        }
    
        .form-group {
          margin-bottom: 20px;
        }
    
        label {
          display: block;
          font-weight: bold;
          margin-bottom: 5px;
        }
    
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        select {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
        }
    
        select {
          height: 40px;
        }
    
        input[type="submit"] {
          background-color: #4CAF50;
          color: #fff;
          border: none;
          padding: 10px 20px;
          border-radius: 4px;
          cursor: pointer;
        }
    
        input[type="submit"]:hover {
          background-color: #45a049;
        }
      </style>
    </head>
    <body>
      <h1>Registration Form</h1>
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="surname">Surname:</label>
          <input type="text" id="surname" name="surname" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        
        </div>
        <div class="form-group">
          <button type="submit" name="submit"> Submit</button>
        </div>
        <?php
        if($flag=='1')
        {
        ?>
        <p style="text-center;color:green;"><strong>Success!</strong>You are completed registration.</p>
        <?php  
        }
        if($flag=='0')
        {
        ?>
        <p style="text-center;color:red;"><strong>Failed!</strong>You are not completed registration.</p>
        <?php  
        }
        ?>
      </form>
</body>
</html>