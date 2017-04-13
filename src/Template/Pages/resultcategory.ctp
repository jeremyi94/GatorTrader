
<?php

$this->layout = "simple";?>
<?php ?>

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

            <div class="container">

                <!-- MAIN -->
                <div id="main" role="main">
                    <!-- Hero -->
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <center>
                                <form id="custom-search-form" class="form-search form-horizontal" action = "result" method="post" class="search">
                                    <div class="input-append span12">
                                        <input type="text" name="search" class="search-query" placeholder="Search...">
                                        <button type="submit" class="btn"><i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="categories">
                        <ul>
                            <li id="home"><form style="display:inline!important;" action="home" method="post">
                                    <button type="submit" 
                                            name="search" 
                                            value="home" 
                                            class="btn-link">Everything</button>
                                </form></li>
                            <li id="furniture"><form style="display:inline!important;" action="resultcategory" method="post">
                                    <button type="submit" 
                                            name="search" 
                                            value="furniture" 
                                            class="btn-link">Furniture</button>
                                </form></li>
                            <li id="electronics"><form style="display:inline!important;" action="resultcategory" method="post">
                                    <button type="submit" 
                                            name="search" 
                                            value="electronics" 
                                            class="btn-link">Electronics</button>
                                </form></li>
                            <li id="books"><form style="display:inline!important;" action="resultcategory" method="post">
                                    <button type="submit" 
                                            name="search" 
                                            value="books" 
                                            class="btn-link">Books</button>
                                </form></li>
                            <li id="sports"><form style="display:inline!important;" action="resultcategory" method="post">
                                    <button type="submit" 
                                            name="search" 
                                            value="sports" 
                                            class="btn-link">Sports</button>
                                </form></li>
                            <li id="kitchen"><form style="display:inline!important;" action="resultcategory" method="post">
                                    <button type="submit" 
                                            name="search" 
                                            value="kitchen" 
                                            class="btn-link">Kitchen</button>
                                </form></li>
                            <li id="clothing"><form style="display:inline!important;" action="resultcategory" method="post">
                                    <button type="submit" 
                                            name="search" 
                                            value="clothing" 
                                            class="btn-link">Clothing</button>
                                </form></li>
                            <li id="other"><form style="display:inline!important;" action="resultcategory" method="post">
                                    <button type="submit" 
                                            name="search" 
                                            value="other" 
                                            class="btn-link">Other</button>
                                </form></li>
                        </ul>
                    </div>
                    <!-- ENDS hero -->

                    <?= $this->fetch('content') ?>
                </div>
                <!-- ENDS MAIN -->

<?php
$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output = "";
//collect
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    if ($searchq == "furniture")
        echo '<script type="text/javascript">window.onload=function () {$(\'#sell\').addClass(\'active\');};
</script>';
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
    if ($searchq == "furniture")
        echo '<div  class="page-header"><h1>Furniture</h1></div>';
    else if ($searchq == "electronics")
        echo '<div  class="page-header"><h1>Electronics</h1></div>';
    else if ($searchq == "sports")
        echo '<div  class="page-header"><h1>Sports</h1></div>';
    else if ($searchq == "books")
        echo '<div  class="page-header"><h1>Books</h1></div>';
    else if ($searchq == "everything")
        echo '<div  class="page-header"><h1>Featured Items</h1></div>';
    else if ($searchq == "other")
        echo '<div  class="page-header"><h1>Other Stuff</h1></div>';
    else if ($searchq == "clothing")
        echo '<div  class="page-header"><h1>Clothing</h1></div>';
    else if ($searchq == "kitchen")
        echo '<div  class="page-header"><h1>Kitchen</h1></div>';

    $query = mysqli_query($link, "SELECT * FROM items WHERE category LIKE '%$searchq%' OR description LIKE'%$searchq%'") or die("could not search");
    $count = mysqli_num_rows($query);
    echo '<div style="padding: 5%">';
    if ($count == 0) {
        $output = 'No results found!';
    } else {

        while ($column = mysqli_fetch_array($query)) {
            echo '<div style="padding:3%" class="row page-header">';
            $id = $column['id'];
            $title = $column['title'];
            $description = $column['description'];
            $price = $column['price'];
            if ($column['img1']) {
                echo '<a href="item"><div class="span3">'
                . '<div class="thumbnail"><img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/></div>'
                . '<h2 class="thumb-caption">$', $price, '</h2>'
                . '</div> ';
                /* if($column['img2']){
                  echo '<li class="span3h"><a href="webroot/img/items/', $id,'b.jpg" class="thumbnail">'
                  . '<img src="webroot/img/items/', $id,'b.jpg" alt="', $description, '" />'
                  . '</a></li>';
                  if($column['img3']){
                  echo '<li class="span3h"><a href="webroot/img/items/', $id,'c.jpg" class="thumbnail">'
                  . '<img src="webroot/img/items/', $id,'c.jpg" alt="', $description, '" />'
                  . '</a></li>';
                  if($column['img3'])
                  echo '<li class="span3h"><a href="webroot/img/items/', $id,'d.jpg" class="thumbnail">'
                  . '<img src="webroot/img/items/', $id,'d.jpg" alt="', $description, '" />'
                  . '</a></li>';

                  }
                  } */
                //echo ' </ul>';
            }
            echo '<div class="span6"> <h1><small>' . $title . '</small></h1><br><p>' . $description . '</div><button type="submit" class="btn buy">Buy Now</button></div></a><br>';
            /** if($column['img1']){
              echo '<p><img src="webroot/img/items/', $id,'a.jpg" alt="', $description, '" />';
              if($column['img2']){
              echo '<p><img src="webroot/img/items/', $id,'b.jpg" alt="', $description, '" />';
              if($column['img3']){
              echo '<p><img src="webroot/img/items/', $id,'c.jpg" alt="', $description, '" />';
              if($column['img3'])
              echo '<p><img src="webroot/img/items/', $id,'d.jpg" alt="', $description, '" />';

              }
              }
              } */
        }
        echo '</div>';
    }
}
?>

