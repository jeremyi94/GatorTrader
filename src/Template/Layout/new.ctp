<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> 

<html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <title>Gator Trader-Home</title>
        <title>Gator Trader-Home</title>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/icons.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css">
        <link rel="stylesheet" href="css/responsive.css">
         <link rel="stylesheet" href="css/email.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.5.3.min.js"></script>
    </head>
    <body id="top-section" data-spy="scroll" data-target="#topnav"  data-offset="70" >
        <?= $this->Flash->render() ?>
        <div class="container">            
            <header>
                
                <!-- navbar -->
                <div id="topnav" class="navbar navbar-fixed-top">
                    <div class="navbar-inner">
                        <a href="http://sfsuse.com/~jeremyi/mything/home">
                        <img src="https://lh3.googleusercontent.com/UnlUyVcjDFOg1ncP2sibv4FDACx17FGnUgRt6lGa1OmZbnXesLW_Qi1m2laSmwCfqngnMu8g7wW1J_ndw583U3d11uid0fHgr6KsrmzZh2rNEa9N5I30ED6dNehdooQQGZCjees" style="float: left;" width="210px" height="210px"/>                    
                        </a>
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
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Category <b class="caret"></b> </a>
                                        <ul class="dropdown-menu social-menu">
                                            <li id="home"><form  action="home" method="post">
                                            <button type="submit" 
                                                    name="search" 
                                                    value="home" 
                                                    class="btn-link" <?php if ($_SERVER['REQUEST_URI'] == "/~sp17g08/648app/home") echo 'id="category-active"';?>>Everything</button>
                                            </form></li>
                                            <li id="furniture"><form  action="resultcategory" method="post">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="furniture" 
                                                        class="btn-link">Furniture</button>
                                            </form></li>
                                            <li id="electronics"><form  action="resultcategory" method="post">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="electronics" 
                                                        class="btn-link">Electronics</button>
                                            </form></li>
                                            <li id="books"><form  action="resultcategory" method="post">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="books" 
                                                        class="btn-link">Books</button>
                                            </form></li>
                                            <li id="sports"><form  action="resultcategory" method="post">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="sports" 
                                                        class="btn-link">Sports</button>
                                            </form></li>
                                            <li id="kitchen"><form  action="resultcategory" method="post">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="kitchen" 
                                                        class="btn-link">Kitchen</button>
                                            </form></li>
                                            <li id="clothing"><form  action="resultcategory" method="post">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="clothing" 
                                                        class="btn-link">Clothing</button>
                                            </form></li>
                                            <li id="other"><form  action="resultcategory" method="post">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="other" 
                                                        class="btn-link">Other</button>
                                            </form></li>
                                        </ul>
                                    </li> 
                                    <li padding-top="50px">
                                        <div>
                                        <form id="custom-search-form" action ="result" method="post" padding-top="200px">
                                                <input type="text" name="search" class="search-query" placeholder="Search..." id="search" size="200">
                                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                                        </form>
                                        </div>
                                    </li>
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
                        <h2>A Buy and Sell Website for San Francisco State University</h2>
                    </div>
                    <!-- ENDS hero -->
                    <?= $this->fetch('content') ?>
                </div>
                <!-- ENDS MAIN -->

                <footer style="clear:left;">
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
