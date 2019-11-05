<?php 
$link=mysqli_connect("localhost","root","") or die("no db");
mysqli_select_db($link,"exam-seat") or die ("not connected");
if(isset($_POST['submit'])){
    $semister=$_POST['sem'];
    $date=$_POST['date'];
    if(empty($semister)||empty($date)){
        echo "<h3>Enter the Details:* its Required</h3>";
    }
    else{
        $query="insert into addseat(semister,date) values ('$semister','$date')";
        if(mysqli_query($link,$query)){
            echo '<h3>Successfully added Deatails</h3>';
            header("Location:home.php");
        }
        else
        echo "<h3>error</h3>";

    }
}
?>
<!doctype>
<html>
<head>
<title>Adding Seats</title>
<style>
.div{
    right:20px;
    font-size:1.1em;
    padding:10px;
    height:40px;
    width:70px;
    color:green;
    position:fixed;
}
table td{
    background-color:grey;
    color:white;
}
th{
    background-color:lightblue;
    height:50px;
    font-size:1.3em;
}
</style>
</head>
<body>
<a href="home.php"><button class="div">Home</button></a>
<form action="addseat.php" method="POST">
<center>
<table border="1" width="340px" height="400px">
<tr><th>Auto Seating Allotment</th></tr>
<tr><td>SEMESTER</td></tr>
<tr><td><input type="text" name="sem"/></td></tr>
<tr><td>DATE</td></tr>
<tr><td><input type="date" name="date"/></td></tr>
<tr><td align="center"><input type="submit" name="submit" value="SUBMIT"/></td></tr>
</table>
</center>
</form>
</body>
</html>