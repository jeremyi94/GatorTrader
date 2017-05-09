<?php
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
?><br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Login</h2>
                <center>
		<?= $this->Form->create(); ?>
			<?= $this->Form->input('email'); ?>
			<?= $this->Form->input('password', array('type' => 'password')); ?>
                        <a href="Forget Password" style="color:#3498db;text-decoration:underline;color:#999999;font-size:12px;text-align:center;">Forget Password</a>
                        <br>
                        <?= $this->Form->submit('Login', array('class' => 'btn')); ?>
                        <br>
                        <h4>Don't have an account</h4>
                        <br>
                        <?= $this->Form->submit('Sign up', array('class' => 'btn')); ?>
		<?= $this->Form->end(); ?>
                    
                </center>
	</div>
</div>
