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
        <h1>Please Login<small>...or register</small></h1>
    </div>
    <div class="row">
        <!-- Form col -->
        <div class="span5 offset2">
            <?= $this->Form->create(); ?>
            <?= $this->Form->input('email'); ?>
            <?= $this->Form->input('password', array('type' => 'password')); ?>
            <?= $this->Form->submit('Login', array('class' => 'btn')); ?>
            <?= $this->Form->end(); ?>
        </div>
        <div class="span3">
            <br>
            <h4>Don't have an account?</h4>
            <br>
            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']); ?>" class="reply">Register</a>

        </div>
        <!-- ENDS form col -->
        <div class="span6 offset3">
            <h3> San Francisco State University<i class="icon-envelope"></i><a href="#"> <small>email@server.com</small></a></h3>
        </div>
    </div>
</section>