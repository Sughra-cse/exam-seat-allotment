<?php
$link = mysqli_connect("localhost","root","") or die("no database");
mysqli_select_db($link,"exam-seat") or die("not connected ");
 if(isset($_POST['submit'])){
     $hallname=$_POST['hallname'];
     $blockname=$_POST['blockname'];
     $floor=$_POST['floor'];
     $seatno=$_POST['seatcapacity'];
     if(empty($hallname)||empty($blockname)||empty($floor)||empty($seatno)){
         echo "<h3>Enter all the Details: *its required</h3>";
     }
     else{
         $query="insert into addexamhall(hallname,blockname,floor,seatcapacity)
         values ('$hallname','$blockname','$floor','$seatno')";
         if(mysqli_query($link,$query)){
            echo "<h3>Exam Hall Details Added Successfully</h3>";
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
 <title>Add Exam Hall</title>
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
 <a href="home.php"><button class="btn">Home</button></a>
 <form action="addexamhall.php" method="POST">
 <center>
 <table border="1" width="350px" height="400px">
 <tr><th>Add Exam Halls</th></tr>
 <tr><td>HALL NAME</td></tr>
 <tr><td><input type="text"  name="hallname"/></td></tr>
 <tr><td>BLOCK NAME</td></tr>
 <tr><td><input type="text" name="blockname"/></td></tr>
 <tr><td>FLOOR</td></tr>
 <tr><td><input type="number" name="floor"/></td></tr>
 <tr><td>SEAT NUMBER</td></tr>
 <tr><td><input type="number" name="seatcapacity"/></td></tr>
 <tr><td align="center"><input type="submit" value='SUBMIT'/></td></tr>
 </table>
 </center>
 </form>
 </body>
 </html>