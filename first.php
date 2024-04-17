<html>
    <body>
        <form method='POST' align='center'>
            <label >Username:</label>
            <input type='text' name='name' ><br><br><br>
            <label >Password:</label>
            <input type='password' name='pass' ><br><br>
            <input type='submit' name='submit' value='Login'>
            <input type='submit' name='register' value='Register'>
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
$n=$_POST['name'];
$p=$_POST['pass'];
$con=mysqli_connect('localhost','root','','student');
$q="select * from form where usr='$n' and pass='$p'";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r))
    echo "<script>window.location.href='direct.html';</script>";
else
    echo "<script>window.location.href='invalid.php';</script>";
}
if(isset($_POST['register']))
{
    echo "<script>window.location.href='register.php';</script>";
}
?>