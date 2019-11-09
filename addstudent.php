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
<a href="home.php"><button class="btn" >Home</button></a>
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
