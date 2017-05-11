<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "new";
?>
<section id="contact-section" >
    <div  class="page-header">
        <h1>Welcome to Gator Trader<small>...Let's sign you up!</small></h1>
    </div>
    <div class="row">
        <!-- Form col -->
        <div class="span3 offset3">
            <?= $this->Form->create(); ?>
            <?= $this->Form->input('first name'); ?>
            <?= $this->Form->input('screen name'); ?>
            <?= $this->Form->input('password', array('type' => 'password')); ?>
        </div>
        <div class="span3">
            <?= $this->Form->input('last name'); ?>
            <?= $this->Form->input('SFSU email'); ?>
            <?= $this->Form->input('please reenter password'); ?>
        </div>
        <div class="span2 offset5"><center>
            <?= $this->Form->submit('Register', array('class' => 'btn')); ?>
            </center>
        </div>
        <?= $this->Form->end(); ?>
        
    </div>
    <!-- ENDS form col -->
    <div class="span6 offset3"><br>
        <h3> San Francisco State University<i class="icon-envelope"></i><a href="#"> <small>email@server.com</small></a></h3>
    </div>
</div>
</section>