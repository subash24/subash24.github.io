<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../vendor/css/bootstrap.css" />
    <style>
        <?php 
        include("../assets/css/stylesheet.css")
        ?>
    </style>
     <link rel="stylesheet" href="../assets/css/Donate.css" />
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
          <li class="nav-item">
            <a class="nav-link " href="../index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php#about">About</a>
          </li>
        </ul>
      </div>
    </nav>
</header>
<?php
include("../config/db.php");
if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($conn,$_POST['donorname']);
    $location = mysqli_real_escape_string($conn,$_POST['location']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $item = mysqli_real_escape_string($conn,$_POST['item']);
    $contact = mysqli_real_escape_string($conn,$_POST['contact']);
    $type = mysqli_real_escape_string($conn,$_POST['opt']);
    //query
    $sql = "INSERT INTO posts (name,type,item,location,city,contact) VALUES('$name','$type','$item',' $location','$city',
    '$contact')";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo 'Syntax error:'. mysqli_error($conn);
    }
    else
    {
        $success = "Posted successfully"; ?>
    <h5 class="header text-center mt-5"><?php echo $success;?></h5>
<?php
    }
}
else {
    $success = "Welcome, Donate and help the needy";
?>
    <h5 class="header text-center mt-5"><?php echo $success;?></h5>
    <div class="containercus">
        <div class="row" id="menu">
            <div class="col-lg-4 col-md-12">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card" style="width: 20rem;margin: 20px;">
                                <img class="card-img-top img- fluid" src="../assets/images/image8.jpeg"
                                    alt="card image" />
                                <div class="card-body">
                                    <h4 class="card-title">Food donation</h4>
                                    <p class="card-text">
                                        “No matter how you say it, 'Hunger Hurts' ”.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <h4 class="card-title">Donate your left-over's</h4>
                                    <p class="card-text">
                                        More than 820 million people are hungry globally. Even a
                                        small help could make an impact.
                                    </p>
                                    <a href="#food" class="btn btn-info btn-md foodbtn">Donate food </a>
                                </div>
                                <div class="card-footer">
                                    <p class="text-secondary">
                                        yes! Your heart is Filled with kindness.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card" style="width: 20rem;margin: 20px;">
                                <img class="card-img-top img- fluid" src="../assets/images/image9.jpeg"
                                    alt="card image" />
                                <div class="card-body">
                                    <h4 class="card-title">Clothes donation</h4>
                                    <p class="card-text">
                                       "Helps People Who Can't Afford Clothes".
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width: 20rem">
                                <div class="card-body">
                                    <h4 class="card-title">Donate old clothes to charity</h4>
                                    <p class="card-text">
                                        Instead of throwing away used clothes, provide them to homeless and people who can't afford them.
                                    </p>
                                    <a href="#cloth" class="btn btn-info btn-md clothbtn">Donate Clothes </a>
                                </div>
                                <div class="card-footer">
                                    <p class="text-secondary">
                                        yes! Your heart is Filled with kindness.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card" style="width: 20rem;margin: 20px;">
                                <img class="card-img-top img- fluid" src="../assets/images/image6.jpg"
                                    alt="card image" />
                                <div class="card-body">
                                    <h4 class="card-title"> Money Donation</h4>
                                    <p class="card-text">
                                        "Few of your extra bucks could bring light to someone’s darkness."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card" style="width: 20rem">
                                <div class="card-body">
                                    <h4 class="card-title">A small donation can make a huge difference.</h4>
                                    <p class="card-text">
                                        Donation is more than just help, Someone’s happiness depends upon your donation.
                                    </p>
                                    <a href=""class="btn btn-info btn-md">Donate amount</a>
                                </div>
                                <div class="card-footer">
                                    <p class="text-secondary">
                                        yes! Your heart is Filled with kindness.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  id="cloth"class="form">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="Donate.php" autocomplete="off" method="post"  style="background-color: #fff;">
                    <h3>Fill the details</h3>
                    <div class="form-group">
                        <label>Name of the provider</label>
                        <input type="text" class="form-control" name="donorname" id="name" required/>
                        <input type="hidden"name="opt"value="cloth"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="boy clothes(five)" name="item" id="item" required/>
                    </div>
                    <div class="form-group">
                        <label>location to pick-up the clothes</label>
                        <input type="text" class="form-control" name="location" id="location" required/>
                    </div>
                    <div class="form-group">
                        <label>city</label>
                        <input type="text" class="form-control" name="city" id="city" required/>
                    </div>

                    <div class="form-group">
                        <label>contact number</label>
                        <input type="text" class="form-control" name="contact" id="contact" required/>
                    </div><br>
                    <button type="submit" name="submit" id="" class="btn btn-outline-primary btn-lg btn-block">
                        post
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div  id="food"class="form">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="Donate.php"  autocomplete="off" method="POST" style="background-color: #fff;">
                    <h3>Fill in the details</h3>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Name of the provider</label>
                            <input type="text" class="form-control" name="donorname" id="" />
                            <input type="hidden"name="opt"value="food"/>
                        </div>
                        <label>Type of food</label>
                        <input type="text" class="form-control" placeholder="eg:bread,rice,sweets etc" name="item" id="food-type" />
                    </div>
                    <div class="form-group">
                        <label>location to pick-up the food</label>
                        <input type="text" class="form-control" name="location" id="location" />
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" id="city" />
                    </div>
                    <div class="form-group">
                        <label>Contact number</label>
                        <input type="text" class="form-control" name="contact" id="contact" />
                    </div><br>

                    <button type="submit" name="submit" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">
                       post
                    </button>
                </form>
            </div>
        </div>
    </div>
<?php }?>
    <script src="../vendor/jquery3.5.1.js"></script>
    <script>

        $(".foodbtn").click(function()
        { 
            $(".form").css("display","none");
            $("#food").css("display","block");
            $("#menu").css("display","none");
        });
        $(".clothbtn").click(function()
        { 
            $(".form").css("display","none");
            $("#cloth").css("display","block");  
            $("#menu").css("display","none");
        });

    </script>
</body>

</html>