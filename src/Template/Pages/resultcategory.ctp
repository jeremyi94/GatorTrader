<style>
    .button {
  
    width: 115px;
    height: 25px;
    background: white;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: yellow;
    font-weight: bold;
}
</style>
<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "simple";
?>
<br>
<div>
<div class="container">
    <div class="row">
        <div class="span12">
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
<?php
$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output = "";
//collect
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];?>
        
<div class="categories">
    <ul>
        <li><form style="display:inline!important;" action="home" method="post">
                <button type="submit" name="search" value="home" class="btn-link"> Everything</button>
            </form></li>
        <li ><form style="display:inline!important;" action="resultcategory" method="post">
                <button type="submit"  name="search" value="furniture" class="btn-link" <?php if ($searchq == "furniture") echo 'id="category-active"';?>>Furniture</button>
            </form></li>
        <li><form style="display:inline!important;" action="resultcategory" method="post">
                <button type="submit" name="search" value="electronics" class="btn-link" <?php if ($searchq == "electronics") echo 'id="category-active"';?>>Electronics</button>
            </form></li>
        <li><form style="display:inline!important;" action="resultcategory" method="post">
                <button type="submit" name="search" value="books" class="btn-link" <?php if ($searchq == "books") echo 'id="category-active"';?>>Books</button>
            </form></li>
        <li><form style="display:inline!important;" action="resultcategory" method="post">
                <button type="submit" name="search" value="sports" class="btn-link" <?php if ($searchq == "sports") echo 'id="category-active"';?>>Sports</button>
            </form></li>
        <li><form style="display:inline!important;" action="resultcategory" method="post">
                <button type="submit"  name="search" value="kitchen" class="btn-link" <?php if ($searchq == "kitchen") echo 'id="category-active"';?>>Kitchen</button>
            </form></li>
        <li><form style="display:inline!important;" action="resultcategory" method="post">
                <button type="submit" name="search" value="clothing" class="btn-link" <?php if ($searchq == "clothing") echo 'id="category-active"';?>>Clothing</button>
            </form></li>
        <li><form style="display:inline!important;" action="resultcategory" method="post">
                <button type="submit" name="search" value="other" class="btn-link" <?php if ($searchq == "other") echo 'id="category-active"';?>>Other</button>
            </form></li>
    </ul>
</div>
<!-- ENDS hero -->

<?= $this->fetch('content') ?>
</div>
<!-- ENDS MAIN -->


<?php
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

    $query = mysqli_query($link, "SELECT * FROM items WHERE category LIKE '%$searchq%' OR description LIKE'%$searchq%'") or die("could not search");
    $count = mysqli_num_rows($query);
    
     echo '<center><div style="padding: 50px">';
    echo'<select id="samples">
        <option value="default">choose a type of sorting</option>
        <option value="0">Sort by Price: Low to High</option>
        <option value="1">Sort by Price: High to Low</option>
        </select>
        <input type="button" id="apply_sample" value="Go"> <noscript></noscript>';
    echo'<br>';
    echo'<br>';
    // making our count center and bigger as well
    echo '<font color = "black" size="3">';
    // this shows the number of our items that we searched
    echo "Found " . $count . " items";
    echo '<br>';
    echo '<br>';
    '</font></div>';
    echo '<div style="padding: 5%">';
    
    if ($count == 0) {
        $output = 'No results found!';
    } else {

        while ($column = mysqli_fetch_array($query)) {
            echo '<div class="row page-header">';
            $id = $column['id'];
            $title = $column['title'];
            $description = $column['description'];
            $price = $column['price'];
            if ($column['img1']) {
                echo '<a href="item?id='.$id.'"><div class="span3">'
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
            else
                echo '<a href="item?id='.$id.'">';
            echo '<div class="span6"> <h1><small>' . $title . '</small></h1><br><p>' . $description . '</div><form action="reply"><button type="submit" class="btn buy">Buy Now</button></form></a></div><br>';

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
    }
}
?>
<script>document.title = "Gator Trader-Search Results";</script>
