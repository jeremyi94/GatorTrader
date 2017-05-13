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
<?= $this->Form->create($user) ?>
        <div class="span3 offset3">
            <?php
            echo $this->Form->input('first name');
            echo $this->Form->input('screen name');
            echo $this->Form->input('password');
            ?>
        </div>
        <div class = "span3">
            <?php
            echo $this->Form->input('last name');
            echo $this->Form->input('SFSU email');
            echo $this->Form->input('please reenter password');
            ?>
        </div>
        <div class="span2 offset5">
            <center>
                 <?= $this->Form->button(__('Submit')) ?>
            </center>
        </div>
        <?= $this->Form->end() ?>
    </div>
    <!-- ENDS form col -->
    <div class="span6 offset3"><br>
        <h3> San Francisco State University<i class="icon-envelope"></i><a href="#"> <small>email@server.com</small></a></h3>
    </div>
</section>
