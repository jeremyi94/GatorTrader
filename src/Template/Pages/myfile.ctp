<?php

mysql_connect("sfsuse.com","sp17g08","csc648sp17g08");

mysql_select_db("sp17g08");

// Running on Windows or Linux/Unix?
$delimiter = strstr(PHP_OS, "WIN") ? "\" : "/";

function parseCodeTree($path) {

  global $delimiter;

  if ($dir = opendir($path)) {
	
    while ($item = readdir($dir)) {

      // If $item is a directory, recurse
      if (is_dir($path.$delimiter.$item) && $item != "." && $item != "..") {
			
        //printf("Directory: %s <br />", $item);
        parseCodeTree($path.$delimiter.$item);

      // $item is a file, so insert it into database
      } elseif ($item != "." && $item != "..") {

        // Retrieve the chapter number
        $directory = substr(strrchr($path, "$delimiter"), 1);

        //printf("File: %s <br />", $item);

        // Convert the file name to a readable title
        $scriptTitle = str_replace(".php", "", $item);
        $scriptTitle = str_replace("_", " ", $scriptTitle);
		
        // Retrieve the file contents
        $scriptContents = file_get_contents($path.$delimiter.$item);

        // Insert the file information into database
        $query = "INSERT INTO code VALUES('NULL', '$scriptTitle', '$directory', '$scriptContents')";
        $result = mysql_query($query);

      }
    }
    closedir($dir);
  }
  return 1;
}

parseCodeTree('code');

?>
