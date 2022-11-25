<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Work $work
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Work'), ['action' => 'edit', $work->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Work'), ['action' => 'delete', $work->id], ['confirm' => __('この作品のデータを消去しますか # {0}?', $work->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Works'), ['action' => 'management'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Work'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="works view content">
            <h3><?= h($work->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Artist') ?></th>
                    <td><?= h($work->artist) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($work->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Link') ?></th>
                    <td><?= h($work->link) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($work->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $this->Number->format($work->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mastering') ?></th>
                    <td><?= $this->Number->format($work->mastering) ?></td>
                </tr>
                <tr>
                    <th><?= __('Display') ?></th>
                    <td><?= $this->Number->format($work->display) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
