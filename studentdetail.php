<!doctype>
<html>
<head>
<title>All Students Details</title>
</head>
<body >
<a href="home.php"><button align="right">Home</button></a><center>
<table width="900" border="2">
<caption background-color="lightblue">All Student Details</caption>
<tr><th>RegNo</th>
<th>Student</th>
<th>Dept</th>
<th>Year</th>
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
    $year=$Datarows['year'];
    $email=$Datarows['email'];
    $DOB=$Datarows['date'];
?>

      <tr>
      <td><?php echo $regno; ?></td>
      <td><?php echo $student; ?></td>
      <td><?php echo $dept; ?></td>
      <td><?php echo $year; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $DOB; ?></td>
      </tr>
<?php }?>
</table>
</body>
</html>


