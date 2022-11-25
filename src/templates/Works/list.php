<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Work> $works
 */
?>
<div class="works index content">
    <?= $this->Html->link(__('New Work'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Works') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('artist') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($works as $work): ?>
                <tr>
                    <td><?= $this->Number->format($work->id) ?></td>
                    <td><?= h($work->artist) ?></td>
                    <td><?= h($work->title) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $work->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $work->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $work->id], ['confirm' => __('この作品のデータを消去しますか # {0}?', $work->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
