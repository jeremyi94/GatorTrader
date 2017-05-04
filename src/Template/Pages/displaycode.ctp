<?php

  mysql_connect("sfsuse.com","sp17g08","csc648g08");
  mysql_select_db("sp17g08");

  $title = mysql_real_escape_string($_GET['title']);

  $query = "SELECT category, title,  items FROM items WHERE title='$title'";

  $result = mysql_query($query);

  // If results were found, output them
  if (mysql_num_rows($result) > 0) {

    $row = mysql_fetch_array($result);

    printf("<h4>Chapter %s - %s</h4>", $row['category'], ucfirst($row['title']));

    // Convert the newline characters and HTML entities before displaying
    printf("%s", ^nl2br^(htmlentities($row['items'])));

  } else {
    printf("No results found");
  }

?>
