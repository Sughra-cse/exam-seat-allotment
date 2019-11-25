<!DOCTYPE>
<html>
<head>
<title>Search_student</title>
<style>
body{
    margin-left:18%;
    background-image:url('images.jpg');
    background-size:cover;
}
table tr{
    color:white;
    background-color:grey;
    
}
th{
    background-color:lightblue;
}
</style>
</head>
<body>
<a href="student.php"><button align="left">Back</button></a>
<table border=1 width="900px" height="70px">
<caption style="color:yellow"><h1>view your details</h1></caption><tr>
<th>NAME</th>
<th>USN</th>
<th>BRANCH</th>
<th>HALL NAME</th>
<th>BLOCK NAME</th>
<th>FLOOR</th>
<th>SEMESTER</th>
<th>DATE</th>
<th>SEAT NUMBER</th>
</tr>
<?php
$link =mysqli_connect("localhost","root","") or die("not connected");
mysqli_select_db($link,"exam-seat") or die("not selected");
$regno=$_GET['regno'];
if(empty($regno))
{
    echo "<h3>enter the valid field</h3>";
}
else
{
    $viewquery="SELECT s.sname,s.regno,s.branch,h.hallname,h.blockname,h.floor,s.sem,e.date,e.seat FROM addstudents s,addexamhall h, addseat e where s.regno='$regno' and s.branch=h.branch and h.branch=e.branch and e.semister=h.sem and s.sem=e.semister and s.regno=e.regno";
    $Execute=mysqli_query($link,$viewquery);
    while($Datarows=mysqli_fetch_array($Execute))
    {
        $sname=$Datarows['sname'];
        $regno=$Datarows['regno'];
        $branch=$Datarows['branch'];
        $hallname=$Datarows['hallname'];
        $blockname=$Datarows['blockname'];
        $floor=$Datarows['floor'];
        $semister=$Datarows['sem'];
        $date=$Datarows['date'];
        $seatcapacity=$Datarows['seat'];
?>
        <tr>
        <td><?php echo $sname; ?></td>
        <td><?php echo $regno;?></td>
        <td><?php echo $branch; ?></td>
        <td><?php echo $hallname; ?></td>
        <td><?php echo $blockname; ?></td>
        <td><?php echo $floor; ?></td>
        <td><?php echo $semister; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $seatcapacity; ?></td>
       </tr>
    <?php } }?>

</table>
</body>
</html>