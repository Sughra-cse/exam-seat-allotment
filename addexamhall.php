<?php
 $link=mysqli_connect("localhost","root","") or die("no db found");
 mysqli_select_db($link,"exam-seat") or die("not conected");
 if(isset($_POST['submit'])){
     $branch=$_POST['branch'];
     $hallname=$_POST['hallname'];
     $blockname=$_POST['blockname'];
     $floor=$_POST['floor'];
     $sem=$_POST['sem'];
     if(empty($branch)||empty($hallname)||empty($blockname)||empty($floor)||empty($sem)){
         echo "<h3>Enter all the Details: *its required</h3>";
     }
     else{
         $query = "insert into addexamhall(branch,hallname,blockname,floor,sem)
          values ('$branch',$hallname','$blockname','$floor','$sem')";
         if(mysqli_query($link,$query))
         {
            echo "<h3>Exam Hall Details Added Successfully</h3>";
            header("Location:addexamhall.php");
         }
         else
             echo "error  in  insertion ";
         
     }
 }
 ?>
 <!doctype>
 <html>
 <head>
 <title>Add Exam Hall</title>
 <style>
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
body{
  background-image:url('hme.jpg' );
}
 </style>
 </head>
 <body><div>
 <div>
<nav>
<ul>
<li><a href="addstudent.php" >ADD <br>STUDENTS</a></li>
<li><a href="addexamhall.php" >ADD <br>EXAM HALLS</a></li>
<li><a href="addseat.php" >SEAT <br>ALLOCATION</a></li>
<li><a href="viewseat.php" >VIEW SEATING <br>ARRAGEMENTS</a></li>
<li><a href="studentdetail.php" >STUDENT <br>DETAILS</a></li>
<li><a href="admin.php" >LOG<br>OUT</a></li>
</ul>
</nav>
</div><div>
 <form action="addexamhall.php" method="POST">
 <center>
 <table border="1" width="350px" height="400px">
 <tr><th>Add Exam Halls</th></tr>
 <!-- <tr><td>REGISTER</td></tr> -->
 <!-- <tr><td><input type="text"  name="regno"/></td></tr> -->
 <tr><td>BRANCH</td></tr>
 <tr><td><input type="text" name="branch"/>
</td></tr>
 <tr><td>HALL NAME</td></tr>
 <tr><td><input type="text"  name="hallname"/></td></tr>
 <tr><td>BLOCK NAME</td></tr>
 <tr><td><input type="text" name="blockname"/></td></tr>
 <tr><td>FLOOR</td></tr>
 <tr><td><input type="number" name="floor"/></td></tr>
 <tr><td>SEMESTER</td></tr>
 <tr><td><input type="number" name="sem"/></td></tr>
 <tr><td align="center"><input type="submit" name="submit" value="Submit"/></td></tr>
 </table>
 </center>
 </form></div>
 </div>
 </body>
 </html>