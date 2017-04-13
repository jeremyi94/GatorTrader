
    <?php
$this->layout = "new";
$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output="";
//collect
if(isset($_POST['search'])){
       $searchq = $_POST['search'];
       if($searchq == "furniture")
           echo '<script type="text/javascript">window.onload=function () {$(\'#sell\').addClass(\'active\');};
</script>';
       $searchq = preg_replace("#[^0-9a-z]#i", "",$searchq);
       if($searchq=="furniture")
           echo '<div  class="page-header"><h1>Furniture</h1></div>';
       else if($searchq=="electronics")
           echo '<div  class="page-header"><h1>Electronics</h1></div>';
       else if($searchq=="sports")
           echo '<div  class="page-header"><h1>Sports</h1></div>';
       else if($searchq=="books")
           echo '<div  class="page-header"><h1>Books</h1></div>';
       else if($searchq=="everything")
           echo '<div  class="page-header"><h1>Featured Items</h1></div>';
       else if($searchq=="other")
           echo '<div  class="page-header"><h1>Other Stuff</h1></div>';
       else if($searchq=="clothing")
           echo '<div  class="page-header"><h1>Clothing</h1></div>';
       else if($searchq=="kitchen")
           echo '<div  class="page-header"><h1>Kitchen</h1></div>';
       
       $query = mysqli_query($link, "SELECT * FROM items WHERE category LIKE '%$searchq%' OR description LIKE'%$searchq%'") or die("could not search");
       $count = mysqli_num_rows($query);
       echo '<div style="padding: 5%">';
       if($count == 0){
           $output = 'No results found!';
       }else{
           
           while($column = mysqli_fetch_array($query)){
               echo '<div style="padding:3%" class="row page-header">';
               $id = $column['id'];
               $title = $column['title'];	
	       $description = $column['description'];
               $price = $column['price'];
               if($column['img1']){
                   echo '<a href="item"><div class="span3">'
                . '<div class="thumbnail"><img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/></div>'
                . '<h2 class="thumb-caption">$', $price, '</h2>'
                . '</div> ';
                   /*if($column['img2']){
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
                   }*/
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
               }*/
               }
               echo '</div>';
       }
}

?>

