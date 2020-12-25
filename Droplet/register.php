
<!DOCTYPE html>
<html lang="en">

<?php
    include("templates/header.php");
?>
<?php
  include("config/db.php");   
  $success ="";
  $error = ['pass'=>'','cpass'=>'','email'=>''];
  if(isset($_POST['submit']))
  {
  $orgname = mysqli_real_escape_string($conn,$_POST['orgname']);
  $loc = mysqli_real_escape_string($conn,$_POST['location']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = mysqli_real_escape_string($conn,$_POST['password']);
  $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
  $contact = mysqli_real_escape_string($conn,$_POST['contact']);
  $website = mysqli_real_escape_string($conn,$_POST['website']);
    //error check
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $sql = "SELECT email FROM users where email='".$email."'";
      $result = mysqli_query($conn,$sql);
      $rows = mysqli_num_rows($result);
      if($rows > 0)
      {
        $error['email'] = 'Email already exits';
      }
    }

    if(strlen($pass) < 8)
    {
      $error['pass'] = "Password must atleast contain 8 digits";
    }

    if(strcmp($pass,$cpass)==1)
    {
      $error['cpass'] = "Password Mismatch";
    }

    //creating query
    if(!array_filter($error))
    {

    $sql = "INSERT INTO users(orgname,location,email,password,contact,website) VALUES('$orgname','$loc','$email','$pass','$contact','$website')";
    $result = mysqli_query($conn,$sql);

    if(!$result)
    {
        echo 'Query error'. mysqli_error($conn);
    }
    else
    {
      $success = "Succefully registered Login to continue";
    }
    mysqli_close($conn);
 }
}
?>

<section>
<div class="customcon">
<h5 style="color:steelblue;font-size: 2rem; font-family: montserrat; margin: 50px 0px;" class="text-center">Join our NGO community</h5> 
<h2 style="color:rgb(43, 238, 43);font-size: 1.2rem; font-family: montserrat; margin: 20px 0px;" class="text-center"><?php echo $success; ?></h2>
<div style=" width: 70%;
    margin: 0 auto;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;">
   
    <h2 class="sign">Sign up</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="first">Organization name</label>
            <input type="text" class="form-control" placeholder="Name" name="orgname" id="first"required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="company">Location</label>
            <input type="text" class="form-control" placeholder="No:22,zakria colony,choolaimedu,chennai-94." name="location"id="company"required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email"id=""required>
            <div class="err-text"><?php echo $error['email']?></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password"name="password"required>
            <div class="err-text"><?php echo $error['pass']?></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="cpassword"> Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password"name="cpassword"required>
            <div class="err-text"><?php echo $error['cpass']?></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="phone"name="contact"required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="url">Your Website</label>
            <input type="url" class="form-control" id="url" placeholder="url"name="website"required>
          </div>
      </div>  
      </div>
      <div class="text-right">
      <button type="submit" class="btn btn-primary" id="cusbtn" name="submit">Submit</button>
    </div>
    </form>
</div>
</div>
</section>
  <?php
    include("templates/footer.php");
?>
</html>