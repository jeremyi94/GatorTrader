<?php
$this->layout = "new";
$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output="";
//collect
if(isset($_POST['search'])){
       $searchq = $_POST['search'];
       $searchq = preg_replace("#[^0-9a-z]#i", "",$searchq);
       
       $query = mysqli_query($link, "SELECT * FROM items WHERE category LIKE '%$searchq%' OR description LIKE'%$searchq%' ORDER BY price DESC") or die("could not search");
       //$query = mysqli_query($link, "SELECT title,id,price,description,img1,img2,img3,img4 FROM items") or die("could not search");
       $count = mysqli_num_rows($query);
       echo'<select id="samples">
        <option value="default">choose a type of sorting</option>
        <option value="0">Sort Price: Low to High</option>
        <option value="1">Sort Price: High to Low</option>
        </select>
        <input type="button" id="apply_sample" value="Go"> <noscript></noscript>';
        echo'<br>';
        echo'<br>';
       
       echo  "Found ".$count." items";
       echo '<section id="work-section"><div  class="page-header"><br><h1>Featured Items </h1></div>';
       
       echo '<font color = "black" size="3">';
       
       
       if($count == 0){
           $output = 'No results found!';
           echo '$output';
       }else{
           
           while($column = mysqli_fetch_array($query))
           {
               echo '<div style="padding:30px" class="page-header">';
               //echo "<div style='text-align:center'>";
               $id = $column['id'];
               $title = $column['title'];	
	       $description = $column['description'];
               $price = $column['price'];
               $output = '<p> Title:'.$title.'<p> Description: '.$description.'<p>Price: $'.$price;
               if($column['img1']){
                   echo '<img src="webroot/img/items/thumbnails/' , $id,'a.jpg" hspace="20', $description, '" />';
                   if($column['img2']){
                       echo '<img src="webroot/img/items/thumbnails/', $id,'b.jpg" hspace="20', $description, '" />';
                       if($column['img3']){
                           echo '<img src="webroot/img/items/thumbnails/', $id,'c.jpg" hspace="20', $description, '" />';
                           if($column['img4'])
                               echo '<img src="webroot/img/items/thumbnails/', $id,'d.jpg" hspace="20', $description, '" />';
                            }
                   }
                   
               }
               print($output);
              
               
               //echo '</div>';
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
               echo'<br>';
               
                echo'<button onclick="myFunction()">Buy</button>';
                echo'<script>
                function myFunction() 
                {
                    alert("Thanks For Purchasing");
                }
                </script>';
                
                
                echo'<script>
                var form = document.forms.SubmitBtn;

                form.onsubmit = function(){
                alert("Thanks for pharchasing");
                return true;
                }  
                </script>';
                         
               
               echo'<br>';    
               echo '</div><br>';
               //echo '</div><br>';
            }
        
               echo '</div>';
       }
}
