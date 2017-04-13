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


if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<script type="text/javascript">
window.onload=function () {
    $('#home').addClass('active');
};
</script>
        <!-- Work -->
        <br><br>
        <section id="work-section">
            <div  class="page-header">
                <h1>Featured Items </h1>
                
            </div>
            <ul class="thumbnails">
                <?php
                $link = mysqli_connect("127.0.0.1", "sp17g08", "csc648sp17g08") or die("couldn't connect");
                mysqli_select_db($link, "sp17g08") or die("dead...");
                $list = mysqli_query($link, "SELECT img1, price, id, description FROM items WHERE img1 = 1 ORDER BY RAND() LIMIT 7") or die("could not search");
                for($i =0; $i <3; $i++){
                    $item = $list->fetch_assoc();
                    $id = $item['id'];
                    $description = $item['description'];
                    $price = $item['price'];
                    echo '<li class="span4"><a href="item" class="thumbnail"> <img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/> </a> <h2 class="thumb-caption">$', $price, '</h2> </li>';
                }
                echo '</ul><ul class="thumbnails">';
                for($i =0; $i <4; $i++){
                                        $item = $list->fetch_assoc();
                    $id = $item['id'];
                    $description = $item['description'];
                    $price = $item['price'];
                    echo '<li class="span3"><a href="img/dummies/b-02.jpg" class="thumbnail"> <img src="webroot/img/items/', $id, 'a.jpg" alt="', $description, '"/> </a> <h2 class="thumb-caption">$', $price, '</h2> </li>';
                }
                ?>
           </ul>            
        </section>
        <!-- ENDS work -->


