<?php
$this->layout = "new";

$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output="";
//collect
if(isset($_POST['search'])){
       $searchq = $_POST['search'];
       $searchq = preg_replace("#[^0-9a-z]#i", "",$searchq);
       
       $query = mysqli_query($link, "SELECT * FROM items WHERE title LIKE '%$searchq%' OR description LIKE'%$searchq%'") or die("could not search");
       $count = mysqli_num_rows($query);
       echo '<div style="padding: 50px">';
       if($count == 0){
           $output = 'No results found!';
       }else{
           while($column = mysqli_fetch_array($query)){
               $id = $column['id'];
               $title = $column['title'];	
	       $description = $column['description'];
               $output = '<p>'.$title.'<p>'.$description;
               if($column['img1']){
                   echo '<p><img src="webroot/img/items/thumbnails/', $id,'a.jpg" alt="', $description, '" />';
                   if($column['img2']){
                       echo '   <img src="webroot/img/items/thumbnails/', $id,'b.jpg" alt="', $description, '" />';
                       if($column['img3']){
                           echo '   <img src="webroot/img/items/thumbnails/', $id,'c.jpg" alt="', $description, '" />';
                           if($column['img3'])
                               echo '    <img src="webroot/img/items/thumbnails/', $id,'d.jpg" alt="', $description, '" />';
                       
                            }
                   }
               }
               print($output);
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
               echo '<p>_______________________________________________________________________________________________________________<p>';
               }
               echo '</div>';
       }
}

?>
