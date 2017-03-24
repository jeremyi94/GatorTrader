<?php
$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output="";
//collect
if(isset($_POST['search'])){
       $searchq = $_POST['search'];
       $searchq = preg_replace("#[^0-9a-z]#i", "",$searchq);
       
       $query = mysqli_query($link, "SELECT * FROM items WHERE title LIKE '%$searchq%' OR description LIKE'%$searchq%'") or die("could not search");
       $count = mysqli_num_rows($query);
       if($count == 0){
           $output = 'No results found!';
       }else{
           while($column = mysqli_fetch_array($query)){
               $title = $column['title'];	
	       $description = $column['description'];
               $output .='<div> '.$title.' '.$description.' </div>';
           }
       }
}
print($output);
?>
