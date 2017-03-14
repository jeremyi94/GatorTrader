<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="images index large-9 medium-8 columns content">
    <h3><?= __('Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thumb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alt_text') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag6') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($images as $image): ?>
            <tr>
                <td><?= $this->Number->format($image->id) ?></td>
                <td><?= $image->has('item') ? $this->Html->link($image->item->title, ['controller' => 'Items', 'action' => 'view', $image->item->id]) : '' ?></td>
                <td><?= h($image->name) ?></td>
                <td><?= h($image->thumb) ?></td>
                <td><?= h($image->alt_text) ?></td>
                <td><?= h($image->tag1) ?></td>
                <td><?= h($image->tag2) ?></td>
                <td><?= h($image->tag3) ?></td>
                <td><?= h($image->tag4) ?></td>
                <td><?= h($image->tag5) ?></td>
                <td><?= h($image->tag6) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $image->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
