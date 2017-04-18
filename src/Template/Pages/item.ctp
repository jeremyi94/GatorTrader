
<?php

$this->layout = "new";

$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
$output = "";
//collect
if (isset($_GET['id'])) {
    $searchq = $_GET['id'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

    $query = mysqli_query($link, "SELECT * FROM items WHERE id LIKE '$searchq'") or die("could not search");
    $count = mysqli_num_rows($query);
    echo '<div class="center">';
    if ($count == 10) {
        echo 'No results found!';
    } else {
        while ($column = mysqli_fetch_array($query)) {
            echo '<div class="center">';
            $id = $column['id'];
            $title = $column['title'];
            $description = $column['description'];
            $price = $column['price'];
            if ($column['img1']) {
                echo '<a href="item"><div class="center">'
                . '<div class="image" align = "center"><img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '" style="width:50%"/></div>'
                . '<h2 class="thumb-caption">$', $price, '</h2>'
                . '</div> ';
            }
            echo '<div class="center"> <h1><small>' . $title . '</small></h1><br class="center"><p align="center">' . $description . '</div></div></a><br>';
        }
    }
    echo '</div>';
}
?>

