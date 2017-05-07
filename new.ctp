<?php
?>
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
                        <a href="http://sfsuse.com/~sp17g08/648app/home">
                        <img src="https://lh3.googleusercontent.com/UnlUyVcjDFOg1ncP2sibv4FDACx17FGnUgRt6lGa1OmZbnXesLW_Qi1m2laSmwCfqngnMu8g7wW1J_ndw583U3d11uid0fHgr6KsrmzZh2rNEa9N5I30ED6dNehdooQQGZCjees" style="float: left;" width="210px" height="210px"/>                    
                        </a>
                            <div class="container">
                            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                            <!-- Collapse - Everything you want hidden at 940px or less, place within here -->
                            <div class="nav-collapse">
                                <!-- Main nav -->
                                <ul  class="nav" style="margin-top: -5px;">
                                    <li id="home"><a href="home">Home</a></li>
                                    <li id="sell"><a href="sell">Sell</a></li>
                                    <li id="contact"><a href="contact">Contact</a></li>
                                    <li id="about"><a href="about">About</a></li>                    
                                </ul> 
                                
                                <div class="col-md-7" id="navbar">
                                <!--<div style="padding-top: 1.25%;"> -->
                                
                    
                                <form action=<?= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> class="form-inline" style="margin-top:-5px;">
                        
                                <div class="form-group" style="float: left;">
                                    <select name="category" style="height: 33px; width: 100%;">
                                    <option>Everything</option>
                                    <option>Books</option>
                                    <option>Clothes</option>
                                    <option>Electronics</option>
                                    <option>Furniture</option>
                                    <option>Sports</option>
                                    <option>Kitchen</option>
                                    <option>Other</option>
                                    </select>
                                </div>
                                <!--<div class="input-group" style="float: left; width: 75%;"> -->
                                <div style="float: left; margin-left: 6px">
                                <input type="text" style="height: 23px;"class="form-control" name="query"  value="<?php 
                                if(array_key_exists('query',$_GET))
                                {
                                    echo htmlspecialchars(stripslashes($_GET['query']));
                                } ?>" required>
                                
                                <div class="input-group-btn" style="float: right; margin-right: 10px; padding: 6px; margin-top: -10px;">
                                
                                <div class="input-group-btn"> 
                                    <input class="btn btn-default" type="submit" value="Search" style="height: 32px;">
                                </div> 
                                </div> 
                                
                                
                                </div>
                        
                    </form>
                               
                <!--</div> -->
            </div>
                                    <!--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Category <b class="caret"></b> </a>
                                        <ul class="dropdown-menu social-menu">
                                            <li id="home"><form  action="home" method="post">
                                            <button type="submit" 
                                                    name="search" 
                                                    value="home" 
                                                    class="btn-link" <?//php if ($_SERVER['REQUEST_URI'] == "/~sp17g08/648app/home") echo 'id="category-active"';?>>Everything</button>
                                            </form></li>
                                            
                                            <li id="furniture"><form  action="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> ">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="furniture" 
                                                        class="btn-link">Furniture</button>
                                            </form></li>
                                            
                                            <li id="electronics"><form  action="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> ">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="electronics" 
                                                        class="btn-link">Electronics</button>
                                            </form></li>
                                            
                                            <li id="books"><form  action="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> ">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="books" 
                                                        class="btn-link">Books</button>
                                            </form></li>
                                            
                                            <li id="sports"><form  action="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> ">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="sports" 
                                                        class="btn-link">Sports</button>
                                            </form></li>
                                            
                                            <li id="kitchen"><form  action="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> ">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="kitchen" 
                                                        class="btn-link">Kitchen</button>
                                            </form></li>
                                            
                                            <li id="clothing"><form  action="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> ">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="clothing" 
                                                        class="btn-link">Clothing</button>
                                            </form></li>
                                            
                                            <li id="other"><form  action="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> ">
                                                <button type="submit" 
                                                        name="search" 
                                                        value="other" 
                                                        class="btn-link">Other</button>
                                            </form></li>
                                        </ul>
                                    </li> -->
                                    
                                 <!--   <li padding-top="50px">
                                        <div class="input-group" style="float: left; width: 75%;">
                                        <input type="text" class="form-control" name="query" value="<?//php 
                                        if(array_key_exists('query',$_GET))
                                        {
                                            echo htmlspecialchars(stripslashes($_GET['query']));
                                        } ?>" required>
                                        <div class="input-group-btn">
                                        <input class="btn btn-default" type="submit" value="Search">
                                        </div>
                                        </div>
                                        <!--<div>
                                        <form id="custom-search-form" action ="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?>" padding-top="200px">
                                                <input type="text" name="search" class="search-query" placeholder="Search..." id="search" size="200">
                                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                                        </form>
                                        </div> 
                                   </li>-->
                                    
                               

                                
                                
                                <!-- ENDS main nav -->
                                <!-- social -->
                                <ul class="nav pull-right " style="margin-right: -10%; margin-top: -5px;">
                                    <li class="divider-vertical"></li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hello Guest <b class="caret"></b> </a>
                                        <ul class="dropdown-menu social-menu">
                                            
                                            
                                            <li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']);?></li>
                                            <li id="account"><a href="account"> My Account (<?php echo $loggedIn; ?>)</a></li> 
                                           
                                            <li><?= $this->Html->link('Register', ['controller' => 'users', 'action' => 'register']); ?></li>
                                            
                                            <!--<li id="login"><a href="login">Login</a></li> -->
                                            
                                            <!--<li id="logout"><a href="logout">Log out</a></li> -->
                                            <!--<li><?//= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']);?></li> -->
                                            
                                        </ul>
                                               
                                    </li>
                                    
                                    
                                      
                                        <!--<ul class="right">
                                        <?//php if($loggedIn) : ?>
                                        <li><?//= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></li>
                                        <?//php else : ?>
                                        <li><?//= $this->Html->link('Register', ['controller' => 'users', 'action' => 'register']); ?></li>
                                        <?//php endif; ?>
                                        </ul> -->
                                       
                                    
                                    
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

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

