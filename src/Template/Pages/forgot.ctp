<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "new";
?>
<br>
<h1>Forgot your password?<small>No Problem!</small></h1><br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <center>
	<div class="panel">
            <h2 class="text-center">What is the email address associated with the account?...</h2><br>
		<?= $this->Form->create(); ?>
			<?= $this->Form->input('email'); ?>
            <br>
                <p>We'll send your password to your email...</p>
			<?= $this->Form->submit('Get Password', array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
    </center>
</div>
