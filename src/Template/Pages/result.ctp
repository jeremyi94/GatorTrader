<?php

$this->layout = "new";

$link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
mysqli_select_db($link, "sp17g08") or die("dead...");
//collect
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

    $query = mysqli_query($link, "SELECT * FROM items WHERE title LIKE '%$searchq%' OR description LIKE'%$searchq%'OR category LIKE'%$searchq%'") or die("could not search");
    $count = mysqli_num_rows($query);
    // the select forms to choose our two options for sorting the price
    echo '<center><div style="padding: 50px">';

    echo'<select id="samples">
        <option value="default">choose a type of sorting</option>
        <option value="0">Sort by Price: Low to High</option>
        <option value="1">Sort by Price: High to Low</option>
        </select>
        <input type="button" id="apply_sample" value="Go"> <noscript></noscript>';
    echo'<br>';
    echo'<br>';

    // making our count center and bigger as well
    echo '<font color = "black" size="3">';
    // this shows the number of our items that we searched
    echo "Found " . $count . " items";
    echo '<br>';
    echo '<br>';
    '</font></div>';
    echo '<div style="padding: 5%">';

    while ($column = mysqli_fetch_array($query)) {
        echo '<div class="row page-header">';
        $id = $column['id'];
        $title = $column['title'];
        $description = $column['description'];
        $price = $column['price'];
        if ($column['img1']) {
            echo '<a href="item"><div class="span3">'
            . '<div class="thumbnail"><img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/></div>'
            . '<h2 class="thumb-caption">$', $price, '</h2>'
            . '</div> ';
        }
        echo '<div class="span6"> <h1><small>' . $title . '</small></h1><br><p>' . $description . '</div><button type="submit" class="btn buy">Buy Now</button></div></a><br>';
    }

    echo '</div>';
}
?>
