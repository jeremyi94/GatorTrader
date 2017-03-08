<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="items index large-9 medium-8 columns content">
    <h3><?= __('Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seller_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $item->has('item') ? $this->Html->link($item->item->title, ['controller' => 'Items', 'action' => 'view', $item->item->item_id]) : '' ?></td>
                <td><?= $item->has('user') ? $this->Html->link($item->user->user_id, ['controller' => 'Users', 'action' => 'view', $item->user->user_id]) : '' ?></td>
                <td><?= h($item->img1) ?></td>
                <td><?= h($item->img2) ?></td>
                <td><?= h($item->img3) ?></td>
                <td><?= h($item->img4) ?></td>
                <td><?= h($item->description) ?></td>
                <td><?= h($item->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->item_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->item_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->item_id)]) ?>
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
