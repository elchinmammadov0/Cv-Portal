<?php
    $connect=mysqli_connect('localhost','root','','cv_portal');
    if (!$connect) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    if(isset($_POST["submit"])){
        $education=$_POST["education"];
        $work=$_POST["work"];
        $skills=$_POST["skills"];
        $keyw=$_POST["keyw"];
        echo "Your form is sent!";
        $query="
            INSERT INTO cv 
                VALUES ('','$education','$work','$skills','$keyw')
        ";
        if(mysqli_query($connect,$query) === false){
            echo "Error: " . mysqli_error($connect);
        }
        mysqli_close($connect);
        header('Location: cv.php');
        exit();
    }
?>
<html>
<head>
   <title>CV Portal</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <style>
        body{
            background: #ccddf1;
        }
       a{
        color:antiquewhite;
        text-decoration: none;
       }
       .btn-danger{
        margin-left: 900px;
       }
       .form{
        background-color: #5b6c7f;
        height: 570px;
        width: 420px;
        border-radius: 15px;
       }
       .btn-primary{
        margin-top: 40px;
        margin-left: 150px;

       }
   </style>
</head>
<body>
    <div class=" container-fluid p-3">
        <div class="row">
            <div class="d-flex class-col-lg-12">
                 <h2>Welcome!</h2>
                 <button type="button" class="btn btn-danger"><a href="main.php">Log out</a></button> 
            </div>
        </div>
    </div>
   
   <div class="form container">
    <h3 style="text-align: center;">Add CV</h3>
    <form action="" method="POST" autocomplete="off">
       <label>Education:</label><br>
       <textarea name="education" rows="4" cols="50"></textarea><br>
       
       <label>Work Experience:</label><br>
       <textarea name="work" rows="4" cols="50"></textarea><br>
       
       <label>Skills:</label><br>
       <textarea name="skills" rows="4" cols="50"></textarea><br>

       <label>Keywords:</label><br>
       <input name="keyw" type="text" size="48" placeholder="Enter keywords related to your field">

       

       
       <button type="submit" name="submit" class="btn btn-primary">Save CV</button>
   </form>
   
   </div>
   
   

    </body>
    </html>