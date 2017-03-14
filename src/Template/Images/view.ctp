<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="images view large-9 medium-8 columns content">
    <h3><?= h($image->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $image->has('item') ? $this->Html->link($image->item->title, ['controller' => 'Items', 'action' => 'view', $image->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($image->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thumb') ?></th>
            <td><?= h($image->thumb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt Text') ?></th>
            <td><?= h($image->alt_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag1') ?></th>
            <td><?= h($image->tag1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag2') ?></th>
            <td><?= h($image->tag2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag3') ?></th>
            <td><?= h($image->tag3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag4') ?></th>
            <td><?= h($image->tag4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag5') ?></th>
            <td><?= h($image->tag5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag6') ?></th>
            <td><?= h($image->tag6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($image->id) ?></td>
        </tr>
    </table>
</div>
