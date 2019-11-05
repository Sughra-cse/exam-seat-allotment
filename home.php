<?php
$link = mysqli_connect("localhost", "root" ,"") or die("not connected");
mysqli_select_db($link, "exam-seat") or die("no database found");
if(isset($_POST['submit']))
{

}
?>
<!doctype>
<html>
<head>
<title>HomePage</title>
<style>
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
</div>
</body>
</html>