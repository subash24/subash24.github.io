<?php

session_start();
include("templates/lognav.php");
include("config/db.php");
$sql = "SELECT * FROM users WHERE id='".$_SESSION['id']."'";
$result = mysqli_query($conn,$sql);
if(!$result)
{
    echo 'Query error:'. mysqli_error($conn);
}
$ngo = mysqli_fetch_assoc($result);
$name = $ngo['orgname'];
$location = $ngo['location'];
$web = $ngo['website'];
$contact = $ngo['contact'];
$email = $ngo['email'];
session_unset();
?>


<div class="page-content page-container " id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="assets/images/unnamed.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600" style="font-size:24px;"><?php echo $name;?></h6>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600"style="font-size:18px;">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?php echo $email;?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?php echo $contact;?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Location</p>
                                        <h6 class="text-muted f-w-400"><?php echo $location;?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">website</p>
                                        <h6 class="text-muted f-w-400"><?php echo $web;?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include("templates/footer.php");
?>

</html>