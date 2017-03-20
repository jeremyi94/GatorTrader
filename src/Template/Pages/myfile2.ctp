<?php

  mysql_connect("sfsuse.com","sp17g08","csc648sp17g08");
  mysql_select_db("sp17g08");

  $keyword = mysql_real_escape_string($_POST['keyword']);

  // Perform the fulltext search
  $query = "SELECT category, title, items 
            FROM items WHERE MATCH(title, code)  AGAINST ('$keyword')";

  $result = mysql_query($query);

  // If results were found, output them
  if (mysql_num_rows($result) > 0) {

    printf("Results: <br />");

    while ($row = mysql_fetch_array($result)) {

      printf("Chapter %s: <a href='displaycode.php?id=%s'>%s</a>", 
	      $row['category'], $row['title'], ucfirst($row['title']));

    }

  } else {
    printf("No results found");
  }

?>
