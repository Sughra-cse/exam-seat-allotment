<!doctype>
<html>
<head>
<title>Seating allocation</title>
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
</div><center>
<table width="900" border="2">
<caption color="white">All Student Seating Arrangemennts</caption>
<tr><th>RegNo</th>
<th>Block</th>
<th>Floor</th>
<th>Hall</th>
<th>SeatNo</th>
<th>Semester</th>
<th>Date</th>
</tr>
<?php
$link=mysqli_connect("localhost","root","") or die("no database");
mysqli_select_db($link,"exam-seat") or die("not selected");
$viewquery="SELECT st.regno,e.blockname,e.floor,e.hallname,e.seatno,s.semister,s.date FROM addstudents st,addexamhall e,addseat s where st.regno=e.regno and st.branch=e.branch and s.regno=st.regno and s.branch=st.branch  and st.sem=e.sem and st.sem=s.semister order by st.regno ";
$Execute=mysqli_query($link,$viewquery);
while($Datarows=mysqli_fetch_array($Execute))
{
    $regno=$Datarows['regno'];
    $block=$Datarows['blockname'];
    $floor=$Datarows['floor'];
    $hall=$Datarows['hallname'];
    $seat=$Datarows['seatno'];
    $semester=$Datarows['semister'];
    $date=$Datarows['date'];

?>
                             <tr>
                             <td><?php echo $regno; ?></td>
                             <td><?php echo $block; ?></td>
                             <td><?php echo $floor; ?></td>
                             <td><?php echo $hall; ?></td>
                             <td><?php echo $seat; ?></td>--
                             <td><?php echo $semester; ?></td>
                             <td><?php echo $date; ?></td>
                             </tr> 

                             <?php } ?>
                    </table>
</body>
</html>