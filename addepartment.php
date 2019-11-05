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
<body>
<a href="home.php"><button class="btn" >Home</button></a>
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

