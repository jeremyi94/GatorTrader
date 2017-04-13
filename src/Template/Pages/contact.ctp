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
        <!-- Contact -->
        <section id="contact-section" >
            <div  class="page-header">
                <h1>Contact <small> Get in touch</small></h1>
            </div>
            <div class="row">
                <!-- Form col -->
                <div class="span8">
                    <form class="well" id="contactForm" action="#" method="post">
                        <label>Your Name</label>
                        <input type="text" class="input-xlarge" placeholder="Whats your name?" name="name" id="name">
                        <label>Your Email</label>
                        <input type="text" class="input-xlarge" placeholder="How can i contact you?" name="email" id="email">
                        <label>Message</label>
                        <textarea class="input-xxlarge"  rows="4"  name="comments"  id="comments"></textarea>
                        <p>
                            <input type="button" value="Send" name="submit" id="submit" class="btn"/>
                        </p>
                    </form>
                </div>
                <!-- ENDS form col -->
                <div class="span4">
                    <ul class="address-block unstyled">
                        <li class="address"><i class="icon-home"></i> San Francisco State University</li>
                        <li class="email"><i class="icon-envelope"></i><a href="#"> email@server.com</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- ENDS Contact -->


