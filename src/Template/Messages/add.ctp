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

<div class="messages form large-9 medium-8 columns content">
    <?= $this->Form->create($message,['class' => 'well']); ?>
    <fieldset>
        <legend><?= __('Message') ?></legend>
        <?php
            echo $this->Form->input('sender_name',['placeholder' => $username, 'class' => 'input-xlarge']);
            echo $this->Form->input('receiver_name',['placeholder' => '...', 'class' => 'input-xlarge']);
            echo $this->Form->input('item_id', ['options' => $items]);
            echo $this->Form->input('subject',['placeholder' => '...', 'class' => 'input-xlarge']);
            echo $this->Form->input('date',['class' => 'input-xlarge']);
            echo $this->Form->input('text',['class' => 'input-xxlarge','rows' => 4]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
