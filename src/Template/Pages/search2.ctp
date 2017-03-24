

<?php
f(isset($_POST['submit'])){
  	if(isset($_GET['go'])){ 
  		if(preg_match("/^[  a-zA-Z]+/", $_POST['item'])){ 
  			$item=$_POST['item']; 
    //connect  to the database 
  			$db=mysql_connect  ("sfsuse.com", "sp17g08",  "csc648sp17g08") or die ('I cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
  			$mydb=mysql_select_db("sp17g08"); 
	  //-query  the database table 
  			$sql="SELECT  Title, Category, Description FROM items WHERE Title LIKE '%" . $item .  "%' OR Category LIKE '%" . $item ."%' OR Description LIKE '%" . $item ."%'"; 
	  //-run  the query against the mysql query function 
  			$result=mysql_query($sql); 
	  //-create  while loop and loop through result set 
  			while($row=mysql_fetch_array($result)){ 
  			      $Title  =$row['Title']; 
  			        $Category=$row['Category']; 
  			        $Description=$row['Description']; 
	  //-display the result of the array 
  			        echo "<ul>\n"; 
  			        echo "<li>" . "<a  href=\"search.php?id=$Title\">"   .$Catefory . " " . $Description .  "</a></li>\n"; 
  			        echo "</ul>"; 
  			    }
  			} 
  			else{ 
  				echo  "<p>Please enter a search query</p>"; 
  			} 
  		} 
  	}
?>
