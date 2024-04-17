<html>
    <body>
        <form method='POST' align='center'>
            <label>Name</label>
            <input type='text' name='name'><br><br>
            <label>Roll no</label>
            <input type='text' name='roll'><br><br>
            <label >Username:</label>
            <input type='text' name='usr'><br><br><br>
            <label >Password:</label>
            <input type='password' name='pass' ><br><br>
            <input type='submit' name='register' value='Register'>
        </form>
    </body>
</html>
<?php
if(isset($_POST['register']))
{
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'student');
$n=$_POST['name'];
$r=$_POST['roll'];
$u=$_POST['usr'];
$p=$_POST['pass'];
$q="insert into form values('$n','$r','$u','$p')";
$r=mysqli_query($con,$q);
mysqli_close($con);
echo "<script>window.location.href='first.php'</script>";
}
?>