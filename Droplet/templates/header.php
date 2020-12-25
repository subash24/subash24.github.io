<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="vendor/css/bootstrap.css" />
  <style>
  <?php
  include("assets/css/stylesheet.css"); 
  ?>
  </style>
  <title>Droplet</title>
  <link rel="icon" href="assets/images/drop.png">
</head>
<body>
  <header>
    <nav class="navbar fixed-top navbar-expand-md navbar-light " id="nav">
      <img id="logo" class="ml-3 d-none d-lg-block" src="assets/images/drop.png" />
      <a class="navbar-brand m-0 p-0">Droplet</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              NGO portal
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a id="signup"class="dropdown-item" href="register.php">Sign up</a>
              <a class="dropdown-item" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>