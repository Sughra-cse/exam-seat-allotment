<!doctype>
<html>
<head>
<title>All Students Details</title>
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
caption{font-size:1.4em;
color:yellow;}
table td{
    background-color:grey;
    font-size:1.0em;
}
th{
    font-size:1.1em;
    background-color:lightblue;
}
table{margin-left:10%;}
</style>
</head>
<body >
<div>
<nav>
<ul>
<li><a href="addstudent.php" >ADD <br>STUDENTS</a></li>
<!-- <li><a href="addepartment.php">ADD <br>DEPARTMENT</a></li> -->
<li><a href="addexamhall.php" >ADD <br>EXAM HALLS</a></li>
<li><a href="addseat.php" >SEAT <br>ALLOCATION</a></li>
<li><a href="viewseat.php" >VIEW SEATING <br>ARRAGEMENTS</a></li>
<li><a href="studentdetail.php" >STUDENT <br>DETAILS</a></li>
<li><a href="admin.php" >LOG<br>OUT</a></li>
</ul>
</nav>
</div>
<table width="900" border="2">
<caption background-color="lightblue">All Student Details</caption>
<tr><th>RegNo</th>
<th>Student</th>
<th>Dept</th>
<th>SEMESTER</th>
<th>Email</th>
<th>DOB</th>
</tr>
<?php
$link=mysqli_connect("localhost","root","") or die("no database");
mysqli_select_db($link,"exam-seat") or die("not selected");
$viewquery="SELECT * FROM addstudents order by regno,year";
$EXECUTE=mysqli_query($link,$viewquery);
while($Datarows=mysqli_fetch_array($EXECUTE)){
    $regno=$Datarows['regno'];
    $student=$Datarows['sname'];
    $dept=$Datarows['branch'];
    // $year=$Datarows['year'];
    $sem=$Datarows['sem'];
    $email=$Datarows['email'];
    $DOB=$Datarows['date'];
?>

      <tr>
      <td><?php echo $regno; ?></td>
      <td><?php echo $student; ?></td>
      <td><?php echo $dept; ?></td>
      <!-- <td><?php echo $year; ?></td> -->
      <td><?php echo $sem; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $DOB; ?></td>
      </tr>
<?php }?>
</table>
</body>
</html>


