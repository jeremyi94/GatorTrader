<style>
    ul {
  list-style-type: none;

}
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
	width: 22.5%; /* this value + 2.5 should = 33% */
}
/* class for 4 columns */
ul.rig.columns-4 li {
	width: 22.5%; /* this value + 2.5 should = 25% */
}
 
@media (max-width: 400px) {
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
<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
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
                <h1>Featured Items </h1>
                
            </div>
            <ul class="rig columns-4">
                <?php
                $link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
                mysqli_select_db($link, "sp17g08") or die("dead...");
                $list = mysqli_query($link, "SELECT img1, price, id, description FROM items WHERE img1 = 1 ORDER BY RAND() LIMIT 7") or die("could not search");
                for($i =0; $i <3; $i++){
                    $item = $list->fetch_assoc();
                    $id = $item['id'];
                    $description = $item['description'];
                    $price = $item['price'];
                    echo '<li class="span4"><a href="item?id='.$id.'" class="thumbnail"> <img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/> </a> <h2 class="thumb-caption">$', $price, '</h2> </li>';
                }
                echo '</ul><ul class="rig columns-3">';
                for($i =0; $i <4; $i++){
                                        $item = $list->fetch_assoc();
                    $id = $item['id'];
                    $description = $item['description'];
                    $price = $item['price'];
                    echo '<li class="span3"><a href="item?id='.$id.'" class="thumbnail"> <img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/> </a> <h2 class="thumb-caption">$', $price, '</h2> </li>';

                }
                ?>
           </ul>            
        </section>
        <!-- ENDS work -->


