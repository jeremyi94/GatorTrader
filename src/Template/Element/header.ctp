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
                        <li id="home"><a href="<?= $this->Url->build('/home', true); ?>">Home</a></li>
                        <li id="sell"><a href="<?= $this->Url->build('/sell', true); ?>">Sell</a></li>
                        <li id="contact"><a href="<?= $this->Url->build('/contact', true); ?>">Contact</a></li>
                        <li id="about"><a href="<?= $this->Url->build('/about', true); ?>">About</a></li>                    
                    </ul> 

                    <div class="col-md-7" id="navbar">
                        <!--<div style="padding-top: 1.25%;"> -->


                        <form action=<?= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> class="form-inline" style="margin-top:-5px;">

                            <div class="form-group" style="float: left;">
                                <?php
                                $link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
                                mysqli_select_db($link, "sp17g08") or die("dead...");
                                $sql = mysqli_query($link, "SELECT name FROM categories");
                                if (mysqli_num_rows($sql)) {
                                    $select = '<select name="select">';
                                    while ($rs = mysqli_fetch_array($sql)) {
                                        $select .= '<option>' . $rs['name'] . '</option>';
                                    }
                                }
                                $select .= '</select>';
                                echo $select;
                                ?>
                               <!-- <select name="category" style="height: 33px; width: 100%;">
                                    <option>Everything</option>
                                    <option>Books</option>
                                    <option>Clothes</option>
                                    <option>Electronics</option>
                                    <option>Furniture</option>
                                    <option>Sports</option>
                                    <option>Kitchen</option>
                                    <option>Other</option>
                                </select> -->
                            </div>
                            <!--<div class="input-group" style="float: left; width: 75%;"> -->
                            <div style="float: left; margin-left: 6px">
                                <input type="text" style="height: 30px" class="form-control" name="query"  value="<?php
                                if (array_key_exists('query', $_GET)) {
                                    echo htmlspecialchars(stripslashes($_GET['query']));
                                }
                                ?>" required>

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
                    </li> 
                    
                   <li padding-top="50px">
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
                    <div>
                    <form id="custom-search-form" action ="<?//= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?>" padding-top="200px">
                            <input type="text" name="search" class="search-query" placeholder="Search..." id="search" size="200">
                            <button type="submit" class="btn"><i class="icon-search"></i></button>
                    </form>
                    </div> 
               </li> -->





                    <!-- ENDS main nav -->
                    <!-- social -->
                    <ul class="nav pull-right " style="margin-right: -10%; margin-top: -5px;">
                        <li class="divider-vertical"></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hello Guest <b class="caret"></b> </a>
                            <ul class="dropdown-menu social-menu">
                                <li id="login"><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'display', 'login']) ?>">Login</a></li>
                                <li id="account"><a href="<?= $this->Url->build('/account', true); ?>"> My Account</a></li>
                                <li id="logout"><a href="<?= $this->Url->build('/logout', true); ?>">Log out</a></li>
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