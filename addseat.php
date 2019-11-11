<?php 
$link=mysqli_connect("localhost","root","") or die("no db");
mysqli_select_db($link,"exam-seat") or die ("not connected");
if(isset($_POST['submit'])){
    $regno=$_POST['regno'];
    $branch=$_POST['branch'];
    $semister=$_POST['sem'];
    $date=$_POST['date'];
    if(empty($regno)||empty($branch)||empty($semister)||empty($date)){
        echo "<h3>Enter the Details:* its Required</h3>";
    }
    else{
        $query="insert into addseat(regno,branch,semister,date) values ('$regno','$branch','$semister','$date')";
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
body{
  background-image:url('hme.jpg' );
}
div{
    margin-left:10%;
    /* border: 2px solid palegreen; */
}
nav a:hover{
  color:green;
  background:grey;
}
nav{
    cursor:pointer;
    display:inline;
    overflow:hidden;
}
nav a{
    float:left;
    text-align:center;
    padding:14px 16px;
    font-size:1.1em;
    color:white;
    background:orangered;
    text-decoration:none;
}
ul{
  list-style-type:none;
}
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
<div>
<nav>
<ul>
<li><a href="addstudent.php" >ADD <br>STUDENTS</a></li>
<li><a href="addepartment.php">ADD <br>DEPARTMENT</a></li>
<li><a href="addexamhall.php" >ADD <br>EXAM HALLS</a></li>
<li><a href="addseat.php" >SEAT <br>ALLOCATION</a></li>
<li><a href="viewseat.php" >VIEW SEATING <br>ARRAGEMENTS</a></li>
<li><a href="studentdetail.php" >STUDENT <br>DETAILS</a></li>
<li><a href="admin.php" >LOG<br>OUT</a></li>
</ul>
</nav>
</div
<form action="addseat.php" method="POST">
<center>
<table border="1" width="340px" height="400px">
<tr><th>Auto Seating Allotment</th></tr>
<tr><td>REGISTER NO</td></tr>
<tr><td><input type="text" name="regno"/></td></tr>
<tr><td>BRANCH</td></tr>
<tr><td><input type="text" name="branch"/></td></tr>
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