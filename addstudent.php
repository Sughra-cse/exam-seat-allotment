<?php
$link =mysqli_connect("localhost","root","") or die("no db found");
mysqli_select_db($link,"exam-seat") or die("not conected");
if(isset($_POST['submit'])){
    $regno=$_POST['regno'];
    $sname=$_POST['sname'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $sem=$_POST['sem'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    if(empty($regno)||empty($sname)||empty($branch)||empty($year)||empty($sem)||empty($email)||empty($date)){
            echo "<h3>Enter all the Details : *its required</h3>";
        }
        else{
            $query = "insert into addstudents(regno,sname,branch,year,sem,email,date) 
           values ('$regno','$sname','$branch','$year','$sem','$email','$date')";
            if(mysqli_query($link,$query))
            {
                echo "<h3>Student Details Added Successfully</h3>";
                header("Location:home.php");
            }
            else
            echo "error";
        }
    
}
?>
<!doctype>
<html>
<head>
<title>Adding students</title>
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
table td{
    color:white;
    background:grey;
}
th{
    background:lightblue;
    font-size:1.3em;
    height:50px;
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
<form action="addstudent.php" method="POST">
<center>
<table border="1" width="400px" height="600px">
<tr>
<th>Add Student Details</th></tr>
<tr><td>REGISTRATION NO.</td><tr>
<tr><td><input type="text" name="regno"/></td></tr>
<tr><td>STUDENT NAME</td><tr>
<tr><td><input type="text" name="sname"/></td></tr>
<tr><td>DEPARTMENT</td><tr>
<tr><td><select option name="branch"><option value="CSE">ComputerScience</option>
<option value="ISE">InformationScience</option>
<option value="ECE">ElectricalCommunication</option></select>
</td></tr>
<tr><td>YEAR</td><tr>
<tr><td><select option name="year"><option value="1year">1st Year</option>
<option value="2year">2nd Year</option>
<option value="3year">3rd Year</option>
<option value="4year">4th Year</option></select></td></tr>
<tr><td>SEMESTER</td></tr>
<tr><td><input type="text" name="sem"/></td></tr>
<tr><td>EMAILID</td><tr>
<tr><td><input type="email" name="email"/></td></tr>
<tr><td>DATE OF BIRTH</td><tr>
<tr><td><input type="date" name="date"/></td></tr>
<tr><td align="center"><input type="submit" name="submit" value="Submit"/></td></tr></table></center>
</form>
</body>
</html>
