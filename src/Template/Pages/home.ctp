<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
$this->layout = "new";
?>

<script type="text/javascript">
window.onload=function () {
    $('#home').addClass('active');
};
</script>

<!-- Work -->
<section id="work-section" class="center">
    <div  class="page-header">
        <h1>Featured Items</h1>
    </div>

    <ul class="rig columns-3">
        <?php
        $link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
        mysqli_select_db($link, "sp17g08") or die("dead...");
        $list = mysqli_query($link, "SELECT img1, price, id, description FROM items WHERE img1 = 1 ORDER BY RAND() LIMIT 7") or die("could not search");
        for($i =0; $i <3; $i++){
            $item = $list->fetch_assoc();
            $id = $item['id'];
            $description = $item['description'];
            $price = $item['price'];
            echo '<li><a href="item?id='.$id.'" class="thumbnail"> <div id="parent"><img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/> </div></a> <h2 class="thumb-caption">$', $price, '</h2> </li>';
        }
        for($i =0; $i <3; $i++){
                                $item = $list->fetch_assoc();
            $id = $item['id'];
            $description = $item['description'];
            $price = $item['price'];
            echo '<li><a href="item?id='.$id.'" class="thumbnail"> <div id="parent"><img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/> </div></a> <h2 class="thumb-caption">$', $price, '</h2> </li>';
        }
        ?>
    </ul> 

</section>

