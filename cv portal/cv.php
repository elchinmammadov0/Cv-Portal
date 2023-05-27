<?php
    $connect=mysqli_connect('localhost','root','','cv_portal');
    if (!$connect) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $result=mysqli_query($connect, "SELECT * 
                                    FROM cv
    ");
    $row=mysqli_fetch_array($result);
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <style>
        h1{
            margin-left: 450px;
        }
        td{
            text-align: center;
            font-size: 40px;
        }
        .form{
             background-color: #8FBC8F;
             height: 500px;
             width: 430px;
             border-radius: 15px;
             margin-left: 80px;
        }
        .btn{
            margin-left: 300px;
            margin-top: 200px;
        }
    </style>
</head>
    <body>
        <div class="container-fluid p-3">
            <div class="container m-3">
                <h1>Your CV informations</h1>
            </div>
            <div class="container ">
                <table class="table">
                    <tr>
                         <td><?php echo $row[1] ?></td> 
                    </tr>
                    <tr>
                        <td><?php echo $row[2] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row[3] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row[4] ?></td>
                    </tr>
                 </table>
            </div>
             
         </div>
    </body>
</html>
