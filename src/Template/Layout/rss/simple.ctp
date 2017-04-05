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
                                <li class="active"><a href="#top-section">Top</a></li>
                                <li><a href="#work-section">Work</a></li>
                                <li><a href="#info-section">Information</a></li>
                                <li><a href="#contact-section">Contact</a></li>
                            </ul>
                            <!-- ENDS main nav -->
                            <!-- social -->
                            <ul class="nav pull-right ">
                                <li class="divider-vertical"></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Social <b class="caret"></b> </a>
                                    <ul class="dropdown-menu social-menu">
                                        <li><a href="#"><i class="social-icon twitter"></i> Twitter</a></li>
                                        <li><a href="#"><i class="social-icon facebook"></i> Facebook</a></li>
                                        <li><a href="#"><i class="social-icon dribbble"></i> Dribbble</a></li>
                                        <li><a href="#"><i class="social-icon forrst"></i> forrst</a></li>
                                        <li><a href="#"><i class="social-icon myspace"></i> My Space</a></li>
                                        <li><a href="#"><i class="social-icon vimeo"></i> Vimeo</a></li>
                                        <li><a href="#"><i class="social-icon youtube"></i> Youtube</a></li>
                                        <li><a href="#"><i class="social-icon tumblr"></i> Tumblr</a></li>
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
<?= $this->fetch('content') ?>

        <footer>
            <hr>
            <p>&copy; Copyright 2012 <a href="#">Company Name</a> All Rights Reserved | Website Template By <a target="_blank" href="http://www.luiszuno.com">luiszuno</a></p>

        </footer>
    </div>
</body>
</html>

