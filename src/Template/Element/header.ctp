<header>
    <!-- navbar -->
    <div class="navbar navbar-fixed-top">
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
                    <ul  class="nav">
                        <li id="home"><a href="<?= $this->Url->build('/home', true); ?>">Home</a></li>
                        <li id="sell"><a href="<?= $this->Url->build('/items/add', true); ?>">Sell</a></li>
                        <li id="contact"><a href="<?= $this->Url->build('/contact', true); ?>">Contact</a></li>
                        <li id="about"><a href="<?= $this->Url->build('/about', true); ?>">About</a></li>                    
                    </ul> 

                    <form action=<?= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> class="form-inline">

                         <div class="form-group" style="float: left; margin-top: -10px; margin-left: 10px;">
                            <?php
                            $link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
                            mysqli_select_db($link, "sp17g08") or die("dead...");
                            $sql = mysqli_query($link, "SELECT name FROM categories");

                            ?>
                            
                            <?php
                                    if(empty($_GET['category'])){
                                        $select = '<div class="form-group" style="float: left;">
                                                        <select name="category" style="height: 25px; width: 100%;">
                                                            <option>Everything</option>
                                                            <option>Books</option>
                                                            <option>Clothing</option>
                                                            <option>Electronics</option>
                                                            <option>Furniture</option>
                                                            <option>Sports</option>
                                                            <option>Kitchen</option>
                                                            <option>other</option>
                                                        </select>
                                                    </div>';
                                    }else{
                                        $select = '<div class="form-group" style="float: left;">
                                                        <select name="category" style="height: 25px; width: 100%;"><option>'.$_GET['category'].'<option>
                                                            <option>Everything</option>
                                                            <option>Books</option>
                                                            <option>Clothing</option>
                                                            <option>Electronics</option>
                                                            <option>Furniture</option>
                                                            <option>Sports</option>
                                                            <option>Kitchen</option>
                                                            <option>other</option>
                                                        </select>
                                                    </div>';
                                    }
                                    echo $select;
                                    ?>
                        </div>
                        <!--<div class="input-group" style="float: left; width: 75%;"> -->
                        <div style="float: left; margin-left: 6px; margin-top: -10px;">
                            <input type="text" style="height: 15px; width: 150px" class="form-control" name="query"  value="<?php
                            if (array_key_exists('query', $_GET)) {
                                echo htmlspecialchars(stripslashes($_GET['query']));
                            }
                            ?>">

                            <div class="input-group-btn" style="float: right; margin-right: 10px; padding: 6px;">

                                <div class="input-group-btn"> 
                                    <input class="btn btn-default" type="submit" value="Search" style="height: 25px;margin-top: -7px">
                                </div> 
                            </div> 
                        </div>
                    </form>
                    <div>
                    <ul class="nav pull-right ">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hello <?php if($loggedIn) echo $username; else echo 'Guest'; ?> <b class="caret"></b> </a>
                            <ul class="dropdown-menu social-menu">

                                <?php if($loggedIn) : ?>
                                <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']);?></li>
                                <li><?= $this->Html->link('My Account', ['controller' => 'messages', 'action' => 'privatemessages']);?></li>
                                <?php else : ?>                                
                                <li><?= $this->HTML->link('Register', ['controller' => 'Users', 'action' => 'add']); ?></li>
                                <li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']); ?></li>
                                <?php endif; ?>

                            </ul>                                               
                        </li>
                    </ul>
                    </div>
                    <!-- ENDS nav -->
                </div>
                <!-- ENDS Collapse -->
            </div>
        </div>
    </div>
    <!-- ENDS navbar -->
</header>
