<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body 
{
    margin: 0;
    padding: 0;
    background: url(blue.jpg);
    background-size: cover;
    font-family: sans-serif;
}
label
{
    margin: 0 0 10px;
    padding: 0;
    color : #fff;
    font-size:24px;
}
.box
{
position:absolute;
top: 50%;
left: 50%;
width: 500px;
transform: translate(-50%,-50%);
}
input
{
    position: relative;
    display: inline-block;
    font-size: 20px;
    box-sizing: border-box;
    transition: .5s;
}
input [type="text"]
{
    background: #fff;
    width: 340px;
    height: 50px;
    border: none;
    outline: none;
    padding: 0 25px;
    border-radius: 25px 0 0 25px;
    
}
input [type="submit"]
{
    position: relative;
    left: -5px;
    border-radius: 0 25px 25px 0;
    width: 150px;
    height: 50px;
    border: none;
    outline: none;
    cursor: pointer;
    background: #ffc107;
    color: #fff;

}
    </style>
</head>
<body>
    <div class="box"
    <form method="post">
        <label>Search</label>
        <input type="text" name="search">
        <a href="cv.html"><input type="submit" name="submit"></a>
    </form>
<?php
//Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cv_portal";

$con = new PDO("mysql:host=localhost;dbname=cv_portal",'root','');
if(isset($_POST["submit"]))

{
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str' ");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>id</th>
                <th>education</th>
                <th>work</th>
                <th>skills</th>
                <th>keywords</th>
            </tr>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->education; ?></td>
                <td><?php echo $row->work; ?></td>
                <td><?php echo $row->skills; ?></td>
                <td><?php echo $row->keywords; ?></td>
            </tr>
                
        </table>
        <?php
    }
    
    
    else{
        echo "does not exist";
    }

    
}
?>
</body>
</html>