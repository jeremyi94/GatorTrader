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

<style>
    ul.rig {
	list-style: none;
	font-size: 0px;
	margin-left: -2.5%; /* should match li left margin */
}
ul.rig li {
	display: inline-block;
	padding: 10px;
	margin: 0 0 2.5% 2.5%;
	background: #fff;
	border: 1px solid #ddd;
	font-size: 16px;
	font-size: 1rem;
	vertical-align: top;
	box-shadow: 0 0 5px #ddd;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}
ul.rig li img {
	max-width: 100%;
	height: auto;
	margin: 0 0 10px;
}
ul.rig li h3 {
	margin: 0 0 5px;
}
ul.rig li p {
	font-size: .9em;
	line-height: 1.5em;
	color: #999;
}
/* class for 2 columns */
ul.rig.columns-2 li {
	width: 47.5%; /* this value + 2.5 should = 50% */
}
/* class for 3 columns */
ul.rig.columns-3 li {
	width: 30.83%; /* this value + 2.5 should = 33% */
}
/* class for 4 columns */
ul.rig.columns-4 li {
	width: 22.5%; /* this value + 2.5 should = 25% */
}
 
@media (max-width: 480px) {
	ul.grid-nav li {
		display: block;
		margin: 0 0 5px;
	}
	ul.grid-nav li a {
		display: block;
	}
	ul.rig {
		margin-left: 0;
	}
	ul.rig li {
		width: 100% !important; /* over-ride all li styles */
		margin: 0 0 20px;
	}
}
</style>

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

