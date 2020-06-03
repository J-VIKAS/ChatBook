<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>ChatBook</title>
  </head>
  <body>
      <div class = "container-fluid" style = "background:rgb(19, 18, 18)">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="index.html" style = "color: white">ChatBook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" style = "color: white" href="loggedin.html" checked >Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style = "color: white"  href="notification.html">Notification</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" style = "color: white"  href="find friends.html">Find Friends</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" style = "color: white"  href="profile.html">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style = "color: white"  href="settings.html">Settings</a>
                      </li>
              </ul>
              <ul class="nav justify-content-end">
                  <li>
                      <a class = "nav-link" style = "color: white" href = "login.html">Log Out</a>
                  </li>
              </ul>
            </div>
            </nav>
      </div>
      <br><br>
        <div class = "jumbotorn jumbotron-fluid" style = "background:rgb(15, 15, 15)">
            <div class = "container">
                <br><br>
                <Center><h1 class = "display-1 " style="color:white">Welcome
         <?php
         session_start(); 
            echo  $_SESSION['First_Name'];
        ?>
         
        <?php
            echo  $_SESSION['Last_Name'];
                 ?>
                  </h1>
                </Center>
                <br><br>
            </div>
            </div>
            <br>
        <? php include ''
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>