<?php
$link=mysqli_connect("localhost","root","") or die("no db");
mysqli_select_db($link,"exam-seat") or die("not connected");
if(isset($_POST['submit'])){
       $dept=$_POST['dept'];
       if(empty($dept)){
           echo "<h3>Enter the Details: *Its Required</h3>";
       }
       else{
           $query = "insert into add_department(dept) values ('$dept')";
        if(mysqli_query($link,$query)){
           echo "<h3>Successfully added</h3>";
           header("Location:home.php");}
           else
           echo "error";   
       }
}
?>
<!doctype>
<html>
<head>
<title>Adding Department</title>
</head>
<style>
body{
  background-image:url('hme.jpg' );
}
div{
    margin-left:10%;
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
table td{
    background-color:grey;
    color:white;
}
th{
    font-size:1.3em;
    background-color:lightblue;
}
.btn{
    height:50px;
    padding:10px;
    font-size:1.0em;
    position:fixed;
    cursor:pointer;
    right:20px;
    color:green;
    width:100px;
}
</style>
<body><div>
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
</nav></div>
<form action="addepartment.php" method="POST">
<center>
<table border="1" width="400px" height="300px" >
<tr><th>Add Department</th></tr>
<tr><td>DEPARTMENT</td></tr>
<tr><td><input type="text" name="dept"/></td></tr>
<tr><td align="center"><input type="submit" name="submit" value="Submit"/></td></tr>
</table></center>
</form>
</body>
</html>

