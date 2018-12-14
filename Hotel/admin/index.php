<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>UBAYA HOTEL ADMIN</title>
  
  
     
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  name="email" value="Email" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" name="sub"  value="Login"></p>

          </fieldset>

        </form>

       

      </div> <!-- end login -->

    </div>
    <div class="bottom">  <h3><a href="../index.php">UBAYA HOTEL HOMEPAGE</a></h3></div>
  
  
</body>
</html>

<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($con,$_POST['email']);
      $mypass = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = mysqli_query($con,"SELECT id, pass FROM login WHERE email='$myemail'");
      
      
      if (mysqli_num_rows($sql) > 0)
      {
        $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
        //$active = $row['active'];
        if (password_verify($mypass, $row['pass']))
        {
            $_SESSION['user'] = $myemail;
         
            header("location: home.php");
        }
        else
        {
            echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
        }
      }
      else
      {
          echo '<script>alert("None Data") </script>' ;
      }
   }
?>
