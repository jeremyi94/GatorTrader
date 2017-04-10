<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Please Register</h2>
		<?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'register']]); ?>
			FirstName: <input type = "text" name = "first_name" >
                        LastName: <input type = "text" name = "last_name" >
                        ScreenName: <input type = "text" name = "name" >
                        Email: <input type = "email" name = "email" >
                        Password: <input type = "password" name = "password" >
                        <button type = "submit" > Submit </button>
                        <!--<//?= //$this->Form->input('name'); ?>
			<//?= //$this->Form->input('email'); ?>
			<//?= //$this->Form->input('password', array('type' => 'password')); ?>
			<//?= //$this->Form->submit('Register', array('class' => 'button')); ?> -->
		<?= $this->Form->end(); ?>
	</div>
</div>