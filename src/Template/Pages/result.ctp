<?php
$this->layout = "new";

$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output="";
//collect
if(isset($_POST['search']))
    {
       $searchq = $_POST['search'];
       $searchq = preg_replace("#[^0-9a-z]#i", "",$searchq);
       // we are getting two queries, one by increasing price and other by decreasing price
       $query = mysqli_query($link, "SELECT * FROM items WHERE title LIKE '%$searchq%' OR description LIKE'%$searchq%'OR category LIKE'%$searchq%' ORDER BY price ASC") or die("could not search");
 
       $count = mysqli_num_rows($query);
       
       // the select forms to choose our two options for sorting the price
       echo '<div style="padding: 50px">';
            
        echo'<select id="samples">
        <option value="default">choose a type of sorting</option>
        <option value="0">Sort Price: Low to High</option>
        <option value="1">Sort Price: High to Low</option>
        </select>
        <input type="button" id="apply_sample" value="Go"> <noscript></noscript>';
        echo'<br>';
        echo'<br>';
  

       // making our count center and bigger as well
       echo '<font color = "black" size="3">';
       // this shows the number of our items that we searched
       echo  "Found ".$count." items";
       echo '<br>';
       echo '<br>';
       '</font>';
      
       // if there is no item in related to the searched word
       if($count == 0)
       {
            $output = 'No results found!';
            echo "<div style='text-align:center'>";
            echo '<font color="black" size="7">' .$output. '</font><br>';    
       }
       else
       {
           while($column = mysqli_fetch_array($query))
           {
               
               echo '<div style="padding:30px" class="page-header">';
               echo "<div style='text-align:center'>";
               // we have two different queries, increased and decreased price
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
               
               //printing our result
               print($output);
                /* this is the java script in related to line 21 to 25
                 * i want to sort my items using this function! moreover,
                 * value 0 = low to high and value 1 = high to low
                 * if value 0 is true, our price should be increasing
                 * and we are printing output
                 * and when value 1 is true, our price should be decreasing
                 * which means we are printing output2
                 * however, this function doesnt work!!!!  
                 */
                /*echo"<script>
                
                function myFunction()
                {                   
                    var sort = document.getElementById('samples');
                    var samples = sort.options[mySelect.selectedIndex].value;
                    if (samples === '1') 
                    {
                        alert($output);
                    }
                    else
                    {
                       alert($output2);
                    }
                }
                </script>";*/
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
               echo '</div><br>';
            }
        
               echo '</div>';
       }
}
