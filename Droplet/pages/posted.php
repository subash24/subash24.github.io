
<?php
$error = '';
include("../config/db.php");
//query
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn,$sql);
if(!$result)
{
   echo "error".mysqli_error();
}
else
{
    $posts =  mysqli_fetch_all($result);
}
mysqli_free_result($result);
mysqli_close($conn);
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
    <div id="container">
    <h1>Available items</h1>
    <ul>
        <?php
          echo $error;
                foreach($posts as $post):
                    $id = $post[0];
                    $type = $post[2];
                    $item = $post[3];
                    $loc = $post[5];
         ?>
            <li><span style="display: inline-block;width : 20%;text-align:left;"><?php echo $type;?>
            </span>
            <span style="display: inline-block;width : 30%;text-align:center;"><?php echo $item;?>
            </span>
            <span style="display: inline-block;width : 20%;text-align:center;"><?php echo $loc;?>
            </span>
            <span class="selected"><a href="info.php?id=<?php echo $id?>"style = "color: #fff;
    font-size: 1.2rem;
    text-decoration: none;">view</a>
    </span>
</li>


        <?php endforeach ?>
       
    </ul>
</div>
</main>   
 <footer>
 </footer>
</body>
</html>