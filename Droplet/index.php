<!DOCTYPE html>
<html lang="en">
<?php
include("templates/header.php");
?>
  <div id="home"></div>
  <section id="container">
    <section id="alig" class="row">
      <div id="left-section" class="col-md-6 col-sm-12">
        <h2 id=slogan>Be the <span class="slogan1">Change</span></h2>
        <h5 id="quote"> "Your Kindness is someone's hope."</h5>
        <div id="btn">
          <a class="custombtn" href="pages/Donate.php">Provide Help</a>
        </div>
      </div>
      <div class="right-section col-md-6 col-sm-12">
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/image1.jpg" class="d-block w-100" alt="kind.jpg">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="slogans">Be the reason for someone's smile</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/images/image2.jpg" class="d-block w-100" alt="share.jpg">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="slogans">Serving makes you great</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/images/image3.jpg" class="d-block w-100" alt="smile.jpg">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="slogans">Help feed the poor</h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <div class="cards row">
      <div class="card col-md-4 col-sm-6" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><img src="assets/images/icons8-mission-48.png" />Our vision</h5>
          <p class="card-text">Kindness is the best form of humanity, We can build a strong fondation for humanity
            together.</p>
          <a href="#about" class="card-link">About us</a>
        </div>
      </div>
      <div class="card col-md-4 col-sm-6" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><img src="assets/images/icons8-user-group-48.png" />Volunteer</h5>
          <p class="card-text">Don't stay inside, become a volunteer, Start your contribution by joining.</p></br>
          <a href="#" class="card-link">Join</a>
        </div>
      </div>
      <div class="card col-md-4 col-sm-6" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><img src="assets/images/icons8-donate-48.png" />Donate</h5>
          <p class="card-text">We can't help everyone but everyone can help someone, Donate the needy by clicking below.
          </p>
          <a href="pages/Donate.php" class="card-link">Donate</a>
        </div>
      </div>
    </div>  
    <div id="about"></div>
  </section>
  <hr /> 
  <section> 
    <div class="customcon">
      <h5 class="heading">About</h5>
      <div class="sub-cover row">
        <div class="col-lg-12">
          <h5 class="sub-head">Our project</h5>
          <p class="content">Our project aims at reducing the gap between the people who are willing to help and the people who are searching for such volunteers.
            It will provide a way for the best utilisation of the resources,one thing discarded by someone can be of ultimate use to others.
            It will help in increasing the involvement of more people in the NGOs as the task will be digitalized and so would not require much effort. 
            It will benefit the NGO(s) and such organisations by making it easy to search for the available resources. 
           We make it easy for the people who are willing to donate something because they would just have to post it on the portal without the need of going anywhere.
          </p>
          <h5 class="sub-head">Our team</h5>
          <p class="content">
            This project has been initiated by our team to help the people. We strongly believe in humanity and kindness, <a class="link"href="Donate.html">Donate</a> to make earth a better place.
            <p class="sub2">Contributors</p>
            <ul class="con">
              <li>Gajendran</li>
              <li>Aravindh.k</li>
              <li>Subash.s</li>
            </ul>  
          </p>
        </div> 
      </div>
    </div>
  </section>
  <?php
  include("templates/footer.php");
  ?>
</html>