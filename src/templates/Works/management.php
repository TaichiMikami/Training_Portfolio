<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Work> $works
 */
?>
<div class="header">
    <div class="header-wrapper">
        <a href="#" class="site-title">taichi's works</a>
        <nav class="nav">
            <ul class="nav-wrapper">
                <li class="nav-item"><a href="#">home</a></li>
                <li class="nav-item"><a href="#">price</a></li>
                <li class="nav-item"><a href="#">contact</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class = newwork>
    <?= $this->Html->link(__('Add New Work'), ['action' => 'add'], ['class' => 'button float-right']) ?>
</div>
<div class="main-wrapper mng-main-wrapper">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class = "mng-th mng-id"><?= $this->Paginator->sort('id') ?></th>
                    <th class = "mng-th mng-artist"><?= $this->Paginator->sort('artist') ?></th>
                    <th class = "mng-th mng-title"><?= $this->Paginator->sort('title') ?></th>
                    <th class = "mng-th mng-type"><?= $this->Paginator->sort('type') ?></th>
                    <th class = "mng-th mng-mastering"><?= $this->Paginator->sort('mastering') ?></th>
                    <th class = "mng-th mng-display"><?= $this->Paginator->sort('display') ?></th>
                    <th class = "mng-th mng-link"><?= $this->Paginator->sort('link') ?></th>
                    <th class="actions mng-th mng-actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($works as $work): ?>
                <tr>
                    <td class = "mng-th mng-id"><?= $this->Number->format($work->id) ?></td>
                    <td class = "mng-th mng-artist"><?= h($work->artist) ?></td>
                    <td class = "mng-th mng-title"><?= h($work->title) ?></td>
                    <td class = "mng-th mng-type"><?= $this->Number->format($work->type) ?></td>
                    <td class = "mng-th mng-mastering"><?= $this->Number->format($work->mastering) ?></td>
                    <td class = "mng-th mng-display"><?= $this->Number->format($work->display) ?></td>
                    <td class = "mng-th mng-link"><?= h($work->link) ?></td>
                    <td class="actions mng-th mng-actions">
                        [ <?= $this->Html->link(__('View'), ['action' => 'view', $work->id]) ?> ]
                        [ <?= $this->Html->link(__('Edit'), ['action' => 'edit', $work->id]) ?> ]
                        [ <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $work->id], ['confirm' => __('この作品のデータを消去しますか # {0}?', $work->id)]) ?> ]
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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

