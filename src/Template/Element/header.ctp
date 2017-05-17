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
                    <ul  class="nav">
                        <li id="home"><a href="<?= $this->Url->build('/home', true); ?>">Home</a></li>
                        <li id="sell"><a href="<?= $this->Url->build('/sell', true); ?>">Sell</a></li>
                        <li id="contact"><a href="<?= $this->Url->build('/contact', true); ?>">Contact</a></li>
                        <li id="about"><a href="<?= $this->Url->build('/about', true); ?>">About</a></li>                    
                    </ul> 

                    <form action=<?= $this->Url->build(['controller' => 'items', 'action' => 'search']) ?> class="form-inline">

                        <div class="form-group" style="float: left;">
                            <?php
                            $link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
                            mysqli_select_db($link, "sp17g08") or die("dead...");
                            $sql = mysqli_query($link, "SELECT name FROM categories");
                            //$select = '<select name="select" style="width: 100px;  margin-top: 10px">';
                            ?>
                            
                            <?php
                            if (mysqli_num_rows($sql)) {
                                $selected = null;
                                if(empty($_GET)){
                                    $select = '<select name="select" style="width: 100px;  margin-top: 10px"><option>Everything</option>';
                                    while ($rs = mysqli_fetch_array($sql)) {
                                        $select .= "<option value=\"". $rs['name'] ."\" ".($selected == $rs['name'] ? 'selected=\"selected\"': '').">". $rs['name'] ."</option>";
                                    }
                                }
                                else{
                                    $select = '<select name="select" style="width: 100px;  margin-top: 10px"><option>'.$_GET['select'] .'</option>';
                                    while ($rs = mysqli_fetch_array($sql)) {
                                        if ($rs['name'] == $_GET['select']){
                                            $selected = "selected=\"selected\"";
                                        }else{
                                        $selected = "";}
                                        $select .= "<option value=\"". $rs['name'] ."\" ".($selected == $rs['name'] ? 'selected=\"selected\"': '').">". $rs['name'] ."</option>";
                                    }
                                }
                            }
                            $select .= '</select>';
                            echo $select;
                            ?>
                        </div>
                        <!--<div class="input-group" style="float: left; width: 75%;"> -->
                        <div style="float: left; margin-left: 6px">
                            <input type="text" style="height: 18px; width: 150px" class="form-control" name="query"  value="<?php
                            if (array_key_exists('query', $_GET)) {
                                echo htmlspecialchars(stripslashes($_GET['query']));
                            }
                            ?>" required>

                            <div class="input-group-btn" style="float: right; margin-right: 10px; padding: 6px;">

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
                    <!-- ENDS nav -->
                </div>
                <!-- ENDS Collapse -->
            </div>
        </div>
    </div>
    <!-- ENDS navbar -->
</header>
