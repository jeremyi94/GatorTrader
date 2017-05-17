<header>     
            <!-- navbar -->
            <div id="topnav" class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <a href="http://sfsuse.com/~sp17g08/648app/home">
                    <img src="https://lh3.googleusercontent.com/UnlUyVcjDFOg1ncP2sibv4FDACx17FGnUgRt6lGa1OmZbnXesLW_Qi1m2laSmwCfqngnMu8g7wW1J_ndw583U3d11uid0fHgr6KsrmzZh2rNEa9N5I30ED6dNehdooQQGZCjees" style="float: left;" width="210px" height="210px"/>                    
                    </a>
                        <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                        
                        <div class="nav-collapse">
                            <ul  class="nav" style="margin-top: -5px;">
                                <li id="home"><a href="<?= $this->Url->build('/home', true); ?>">Home</a></li>
                                <li id="sell"><a href="<?= $this->Url->build('/sell', true); ?>">Sell</a></li>
                                <li id="contact"><a href="<?= $this->Url->build('/contact', true); ?>">Contact</a></li>
                                <li id="about"><a href="<?= $this->Url->build('/about', true); ?>">About</a></li>                  
                            </ul>
                            
                            <div class="col-md-7" id="navbar">
                                <form action=<?= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> class="form-inline" style="margin-top:-5px;">
                                    <?php
                                    if(empty($_GET['category'])){
                                        $select = '<div class="form-group" style="float: left;">
                                                        <select name="category" style="height: 33px; width: 100%;">
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
                                                        <select name="category" style="height: 33px; width: 100%;"><option>'.$_GET['category'].'<option>
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
                                <div>
                                    <ul class="nav pull-right">
                                        <li class="divider-vertical"></li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hello Guest <b class="caret"></b> </a>
                                            <ul class="dropdown-menu social-menu">
                                                <li id="login"><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">Login</a></li>
                                                <li id="account"><a href="<?= $this->Url->build('/account', true); ?>"> My Account</a></li>
                                                <li id="logout"><a href="<?= $this->Url->build('/logout', true); ?>">Log out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </div>
                            </div>

</header>
