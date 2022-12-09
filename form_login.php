<?php
$con= mysqli_connect("localhost","root","qwerty@123","loginsystem") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 

?>


<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>

      <form name="frmlogin"  method="post" action="login.php">
        <p> </p>
        <p><b> Login Form </b></p>
        <p> ชื่อผู้ใช้ :
          <input type="text"  id="Username" required name="Username" name="Username" placeholder="Username">
        </p>
        <p>รหัสผ่าน :
          <input type="password"  id="Password" required name="Password" name="Password" placeholder="Password">
        </p>
        <p>
          <button type="submit">Login</button>
          &nbsp;&nbsp;
          <button type="reset">Reset</button>
          <br>
        </p>
      </form>
</body>
</html>