<?php
echo $_GET['id'];

include("../config/db.php");
$sql = "SELECT * FROM posts WHERE id='".$_GET['id']."'";
$result = mysqli_query($conn,$sql);
if(!$result)
{
    echo 'Query error:'. mysqli_error($conn);
}
$user = mysqli_fetch_assoc($result);
$name = $user['name'];
$type = $user['type'];
$loc = $user['location'];
$ph = $user['contact'];
$des = $user['item'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posted</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
  <style>
  <?php
  include("../assets/css/stylesheet.css"); 
  ?>
  </style>  
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-light " id="nav">
      <img id="logo" class="ml-3 d-none d-lg-block" src="../assets/images/drop.png" />
      <a class="navbar-brand m-0 p-0">Droplet</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item" style="background-color: #f0f0f0;">
            <a class="nav-link"  style="color:steelblue;" href="posted.php">View Posted</a>
          </li>
          <li class="nav-item"  style="background-color: #f0f0f0;">
            <a class="nav-link" href="Request.php">Request</a>
          </li>
          <li class="nav-item" style="background-color: #f0f0f0;">
            <a class="nav-link" href="logout.php">logout</a>
          </li>
        </ul>
      </div>
    </nav>
</header>
<main>
<div class=" mt-5 row">
<div class="col-4">
</div>
<div class="col-4">
<div class="card ">
  <div class="card-body">
    <h4 class="card-title text-center">Details</h4>
    <p class="card-text text-muted">Type :<br/> <span style="font-size:18px; padding-left:15px; color:black"><?php echo $type; ?></span></p>
    <p class="card-text text-muted">Description :<br/> <span style="font-size:18px; padding-left:15px; color:black"><?php echo $des; ?></span></p><hr/>
    <p class="card-text text-muted">Name of the giver :<br/> <span style="font-size:18px; padding-left:15px; color:black"><?php echo $name; ?></span></p>
    <p class="card-text text-muted">location to pick :<br/> <span style="font-size:18px; padding-left:15px; color:black"><?php echo $loc; ?></span></p>
    <p class="card-text text-muted">phone :<br/> <span style="font-size:18px; padding-left:15px; color:black"><?php echo $ph; ?></span></p>
    <button href="#" class="card-link btn btn-primary cus" style="width:100%; padding : 10px 0;">Contact</button>
  </div>
</div>
</div>
<div class="col-4">
</div>
</div>
</main>   
 <footer>
 </footer>
</body>
</html>