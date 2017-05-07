<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> 
<?= $this->element('header'); ?>
  
    <body id="top-section" data-spy="scroll" data-target="#topnav"  data-offset="70" >
        <?= $this->Flash->render() ?>
        <div class="container">
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
                                    <li id="home"><a href="home">Home</a></li>
                                    <li id="sell"><a href="sell">Sell</a></li>
                                    <li id="contact"><a href="contact">Contact</a></li>
                                    <li id="about"><a href="about">About</a></li>
                                </ul>
                                <!-- ENDS main nav -->
                                <!-- social -->
                                <ul class="nav pull-right ">
                                    <li class="divider-vertical"></li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hello Guest <b class="caret"></b> </a>
                                        <ul class="dropdown-menu social-menu">
                                            <li id="login"><a href="login">Login</a></li>
                                            <li id="account"><a href="account"> My Account</a></li>
                                            <li id="logout"><a href="logout">Log out</a></li>
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
                <!-- MAIN -->
                <div id="main" role="main">
                    <!-- Hero -->
                    <div class="hero-unit">
                        <h1>Gator Trader</h1>
                    </div>
                    <!-- ENDS hero -->

                    <?= $this->fetch('content') ?>
                </div>
                <!-- ENDS MAIN -->

                <footer>
                    <hr>
                    <p>&copy; Copyright 2017 <a href="about">CSC 648 Team 08</a> All Rights Reserved </p>

                </footer>
            </div>

            <!-- JavaScript at the bottom for fast page loading -->
            <script src="js/jquery-1.7.1.min.js"></script>
            <!-- scripts concatenated and minified via build script -->
            <script src="js/plugins.js"></script>
            <script src="js/bootstrap-dropdown.js"></script>
            <script src="js/bootstrap-scrollspy.js"></script>
            <script src="js/bootstrap-tab.js"></script>
            <script src="js/bootstrap-collapse.js"></script>
            <script src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
            <script src="js/custom.js"></script>
        </div>
    </body>
</html>
