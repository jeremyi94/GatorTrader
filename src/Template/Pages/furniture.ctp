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
<div class="container">

    <!-- MAIN -->
    <div id="main" role="main">
        <!-- Hero -->
        <div class="hero-unit">
            <h1>Gator Trader</h1>
        </div>
        <form action = "result" method="post">
            <input type="text" name="search" placeholder="Search..." required>
            <input type="submit" value=">>"/>
        </form>
        <div class="categories"
             <ul>
                 <li><a href="//sfsuse.com/~sp17g08/648app/furniture">Furniture</a></li>
                <li><a href="#">Electronics</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Kitchen</a></li>
                <li><a href="#">Clothes</a></li>
                <li><a href="#">Others</a></li>
            </ul>
        </div>
        <!-- ENDS hero -->
        <!-- Work -->
        <section id="work-section">
            <div  class="page-header">
                <h1>Furniture</h1>
            </div>
            
        </section>
        <!-- ENDS work -->
       
    </div>
    <!-- ENDS MAIN -->
    <footer>
    </footer>
</div>
<!-- JavaScript at the bottom for fast page loading -->
<script src="js/jquery-1.7.1.min.js"></script>
<!-- scripts concatenated and minified via build script -->
<script src="js/plugins.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/custom.js"></script>
