<?php 
$link=mysqli_connect("localhost","root","") or die("no database");
mysqli_select_db($link, "exam-seat") or die("not selected");
if (isset($_POST['submit'])){
    $regno=$_POST['regno'];
    if(empty($regno)){
        echo "<h3>Enter your USN</h3>";
    }
    else{
        $myquery=mysqli_query($link, "select regno from addstudents where regno='$regno' ") or die("failed to query".mysqli_error($link));
        $row =mysqli_fetch_array($myquery);
        if($row['regno']==$regno){
            echo "Successful";
            header("Location:search_student.php");
        }
        else
        echo "<h3>Enter the valid USN</h3>";
    }
}
?>
<!doctype>
<html>
<head>
<title>student login</title>
<style>
body{
background-image:url('classroom2.jpg');}
table tr{
    background-color:grey;
    color:white;
    font-size:1.0em;
}
table th{
    background-color:lightblue;
    height:50px;
    font-size:1.4em;
}
</style>
<body>
<a href="index.php"><button>Logout</button></a>
<form action="search_student.php" method="GET">
<center>
<table border="1" width="290px" height="250px">
<tr><th>Student Sign in</th></tr>
<tr><td>REGISTRATION NO.</td></tr>
<tr><td><input type="text" name="regno"/></td></tr>
<tr><td align="center"><input type="submit" name="submit" value="LOGIN"/></td></tr>
</table>
</center>
</form>
</body>
</html>


