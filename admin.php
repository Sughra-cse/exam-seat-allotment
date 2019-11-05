<?php
$link=mysqli_connect("localhost","root","") or die ("Not Connected");
mysqli_select_db($link,"exam-seat") or die ("no database found");
if(isset($_POST['submit']))
{
    $Username=$_POST['user'];
    $Password=$_POST['error'];
    if(empty($Username)||empty($Password)){
        echo "<h3>Enter Username and Password</h3>";
    }
    else{
        $result=mysqli_query($link, "select * from login where username='$Username' and password='$Password'") or die("Failed to query".mysqli_error($link));
        $row=mysqli_fetch_array($result);
        if($row['username']==$Username && $row['password']==$Password){
            echo "Your Login Successfull!!  <br> I Welcome You";
            header("Location:home.php");
        }
            else
            echo "Enter the valid data"; 
    }
}
?>
<!doctype>
<html>
<head>
<title>Login in</title>
<style>
table{
    align:center;
    color:whitesmoke;
    background-color:grey;
    padding:20px;
    margin-left:15%;
    border:2px solid wheat;
}
form{
    width:50%;
    border:3px solid palegreen;
    margin-left:20%;
    padding:40px;
}
table tr td{
    text-align:center;
    font-size:1.2em;
}
</style>
<body background="dillon-shook.jpg">
<a href="index.php"><button>back</button></a>
<form action="admin.php"  method="POST">
<table border="1" width="400px" height="250px"><tr><td colspan="2">Enter the Login Details</td></tr>
<tr><td><label>UserName:&nbsp;</label><td><input type="text" name="user"/></td></td></tr>
<tr><td><label>Password&nbsp;&nbsp;&nbsp;:</label><td><input type="password" name="error"/></td></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="&nbsp;Login&nbsp;"/></td></tr>
</table><br><br><br>
</form>
</body>
</html>