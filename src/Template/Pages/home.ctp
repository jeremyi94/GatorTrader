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

        <!-- Work -->
        <br><br>
        <section id="work-section">
            <div  class="page-header">
                <h1>Featured Items </h1>
            </div>
            <ul class="thumbnails">
                <li class="span4"> <a href="img/dummies/b-01.jpg" class="thumbnail"> <img src="img/dummies/01.jpg" alt=""> </a> <span class="thumb-caption">Price</span> </li>
                <li class="span4"> <a href="img/dummies/b-02.jpg" class="thumbnail"> <img src="img/dummies/02.jpg" alt=""> </a> <span class="thumb-caption">Price</span> </li>
                <li class="span4"> <a href="img/dummies/b-03.jpg" class="thumbnail"> <img src="img/dummies/03.jpg" alt=""> </a> <span class="thumb-caption">Price</span> </li>
            </ul>
            <ul class="thumbnails">
                <li class="span3"> <a href="img/dummies/b-04.jpg" class="thumbnail"> <img src="img/dummies/04.jpg" alt=""> </a> <span class="thumb-caption">Price</span> </li>
                <li class="span3"> <a href="img/dummies/b-05.jpg" class="thumbnail"> <img src="img/dummies/05.jpg" alt=""> </a> <span class="thumb-caption">Price</span> </li>
                <li class="span3"> <a href="img/dummies/b-06.jpg" class="thumbnail"> <img src="img/dummies/06.jpg" alt=""> </a> <span class="thumb-caption">Price</span> </li>
                <li class="span3"> <a href="img/dummies/b-07.jpg" class="thumbnail"> <img src="img/dummies/07.jpg" alt=""> </a> <span class="thumb-caption">Price</span> </li>
            </ul>
        </section>
        <!-- ENDS work -->


