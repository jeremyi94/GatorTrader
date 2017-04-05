<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            CSC 648 Group 8
        </title>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.5.3.min.js"></script>
    </head>

    <?= $this->Flash->render() ?>
    <div>

        <header>
            <!-- navbar -->
            <div id="topnav" class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                        <!-- Collapse - Everything you want hidden at 940px or less, place within here -->
                        <div class="nav-collapse">
                            <!-- Main nav -->
                            <ul  class="nav">
                                <li class="active"><a href="home">Home</a></li>
                                <li><a href="sell">Sell</a></li>
                                <li><a href="contact">Contact</a></li>
                                <li><a href="about">About</a></li>
                            </ul>
                            <!-- ENDS main nav -->
                            <!-- social -->
            <ul class="nav pull-right ">
              <li class="divider-vertical"></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hello Guest <b class="caret"></b> </a>
                <ul class="dropdown-menu social-menu">
                  <li><a href="login">Login</a></li>
                  <li><a href="account"> My Account</a></li>
                  <li><a href="logout">Log out</a></li>
                </ul>
              </li>
            </ul>
            <!-- ENDS Social -->

                        </div>
                        <!-- ENDS Collapse -->
                    </div>
                </div>
            </div>
            <!-- ENDS navbar -->
             
        </header>
        <div class="container">

    <!-- MAIN -->
    <div id="main" role="main">
        <!-- Hero -->
        <div class="hero-unit">
            <h1>Gator Trader</h1>
        </div>
        <br>
        <form action = "result" method="post" class="search">
            <input type="text" name="search" placeholder="Search..." required>
            <input type="submit" value=">>"/>
        </form>
        <div class="categories">
             <ul>
                 <li><a href="home">Everything</a></li>
                <li><a href="furniture">Furniture</a></li>
                <li><a href="electronics">Electronics</a></li>
                <li><a href="books">Books</a></li>
                <li><a href="sports">Sports</a></li>
                <li><a href="kitchen">Kitchen</a></li>
                <li><a href="clothes">Clothes</a></li>
                <li><a href="others">Others</a></li>
            </ul>
        </div>
        <!-- ENDS hero -->

        <?= $this->fetch('content') ?>
         </div>
    <!-- ENDS MAIN -->

        <footer>
            <hr>
            <p>&copy; Copyright 2017 <a href="about">CSC 648 Team 08</a> All Rights Reserved </a></p>

        </footer>
    </div>
</body>
</html>
