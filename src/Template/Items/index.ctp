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
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sold') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_posted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $this->Number->format($item->id) ?></td>
                <td><?= $item->has('user') ? $this->Html->link($item->user->id, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
                <td><?= h($item->category_name) ?></td>
                <td><?= h($item->title) ?></td>
                <td><?= h($item->description) ?></td>
                <td><?= $this->Number->format($item->price) ?></td>
                <td><?= $this->Number->format($item->img1) ?></td>
                <td><?= $this->Number->format($item->img2) ?></td>
                <td><?= $this->Number->format($item->img3) ?></td>
                <td><?= $this->Number->format($item->img4) ?></td>
                <td><?= $this->Number->format($item->sold) ?></td>
                <td><?= h($item->date_posted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->user_id)]) ?>
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
