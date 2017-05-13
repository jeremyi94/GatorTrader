<?php

/**
 * @var \App\View\AppView $this
 */
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
        <?= $this->Form->create($user) ?>
        <fieldset>
            <div class="span3 offset3">
                <?php
                echo $this->Form->input('first name');
                echo $this->Form->input('screen name');
                ?>
            </div>
            <div class = "span3">
                <?php
                echo $this->Form->input('last_name');
                echo $this->Form->input('email', ['label' => 'SFSU Email']);
                ?>
            </div>
            <div class="span12"><center><?php echo $this->Form->input('password'); ?></center></div>
            <center><div class="span3 offset3"><br><a href="#">Terms and Conditions</a></div></center>
            <center><div class="span1 offset1"><br><?php echo $this->Form->input('terms', array('label'=>'I agree', 'type'=>'checkbox')); ?></div></center>
            <div class="span12"><center><br><?= $this->Form->submit('Submit', ['class' => 'btn']) ?> </center></div>
            
        </fieldset>
        <?php
        echo $this->Form->hidden('is_admin');
        echo $this->Form->hidden('is_seller');
        ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="span6 offset3"><br>
        <center><h3> San Francisco State University<i class="icon-envelope"></i><a href="#"> <small>email@server.com</small></a></h3></center>
    </div>
</section>