<?php
$this->layout = "new";
$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output="";
//collect
if(isset($_POST['search'])){
       $searchq = $_POST['search'];
       $searchq = preg_replace("#[^0-9a-z]#i", "",$searchq);
       
       $query = mysqli_query($link, "SELECT * FROM items WHERE category LIKE '%$searchq%' OR description LIKE'%$searchq%'") or die("could not search");
       $count = mysqli_num_rows($query);
       echo '<section id="work-section"><div  class="page-header"><br><h1>Featured Items </h1></div>';
       if($count == 0){
           $output = 'No results found!';
       }else{
           
           while($column = mysqli_fetch_array($query)){
               echo '<div style="border: solid; border-color: gray;padding:30px;">';
               $id = $column['id'];
               $title = $column['title'];	
	       $description = $column['description'];
               $price = $column['price'];
               $output = '<p>'.$title.'<p>'.$description.'<p>$'.$price;
               if($column['img1']){
                   echo '<ul class="thumbnails"><li class="span3h"><a href="webroot/img/items/', $id,'a.jpg" class="thumbnail">'
                   . '<img src="webroot/img/items/', $id,'a.jpg" alt="">'
                           . '</a></li>';
                   if($column['img2']){
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
                   }
                   echo ' </ul>';
               }
               print($output);
               echo '</div><br>';
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
               echo '</section>';
       }
}

?>
