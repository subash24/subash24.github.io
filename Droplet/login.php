<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
    include("templates/header.php");
?>

<?php
 include("config/db.php"); 
 $error = '';
 if(isset($_POST['submit']))
 {
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $pass = mysqli_real_escape_string($conn,$_POST['password']);
 $sql = "SELECT id,email,password FROM users WHERE email='".$email."' AND password='".$pass."'";
 $result = mysqli_query($conn,$sql);
 $org = mysqli_fetch_assoc($result);
$id = $org['id'];
 $rows = mysqli_num_rows($result);
 mysqli_free_result($result);
 mysqli_close($conn);
 if($rows > 0)
 { 
   session_start();
   $_SESSION['logged_in'] = true;
   $_SESSION['id'] = $id;
    header("Location:interface.php");
  ob_flush();

 }
 else
 {
   $error = "Username or Password incorrect";
 }

 }



?>
<section>
<div class="customcon">
<h5 style="color:steelblue;font-size: 2rem; font-family: montserrat; margin: 50px 0px 20px;" class="text-center">Welcome </h5>
<div style=" width: 50%;
    margin: 0 auto;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;">
    <h2 class="Login">Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="email">Email address</label>
            <input  name="email" type="email" class="form-control" id="lemail" placeholder="Email" name="email" value="" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="lpassword" placeholder="Password" name= "password" value="" required>
            <div class="err-text"><?php echo $error?></div>
          </div>
        </div>
      </div>
      <div style="font-size: 1rem;
    color : gray;">Not yet registered?<a href="register.php">Register</a></div>
      <div class="text-center">
         <button type="submit" name="submit" value="Login" class="btn btn-primary"id="cusbtn">Login</button>
      </div>
    </form>
</div>
</div>
</section>
    <?php
    include("templates/footer.php");
?>
</html>