<!doctype>
<html>
<head>
<title>Seating allocation</title>
</head>
<body >
<a href="home.php"><button align="right">Home</button></a><center>
<table width="900" border="2">
<caption background-color="lightblue">All Student Seating Arrangemennts</caption>
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
$viewquery="SELECT st.regno,e.blockname,e.floor,e.hallname,e.seatcapacity,s.semister,s.date FROM addstudents st,addexamhall e,addseat s order by st.regno ";
$Execute=mysqli_query($link,$viewquery);
while($Datarows=mysqli_fetch_array($Execute))
{
    $regno=$Datarows['regno'];
    $block=$Datarows['blockname'];
    $floor=$Datarows['floor'];
    $hall=$Datarows['hallname'];
    $seat=$Datarows['seatcapacity'];
    $semester=$Datarows['semister'];
    $date=$Datarows['date'];

?>
                             <tr>
                             <td><?php echo $regno; ?></td>
                             <td><?php echo $block; ?></td>
                             <td><?php echo $floor; ?></td>
                             <td><?php echo $hall; ?></td>
                             <td><?php echo $seat; ?></td>
                             <td><?php echo $semester; ?></td>
                             <td><?php echo $date; ?></td>
                             </tr> 

                             <?php } ?>
                    </table>
</body>
</html>