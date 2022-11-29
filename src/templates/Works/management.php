<body>
    <div class="main-wrapper mng-main-wrapper">
        <div class = newwork>
            <?= $this->Html->link(__('Add New Work'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        </div>
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
                        <td class = "mng-th mng-type"><?php echo $work->getTypeText() ?></td>
                        <td class = "mng-th mng-mastering"><?php echo $work->getMasteringStatus() ?></td>
                        <td class = "mng-th mng-display"><?php echo $work->getDisplayStatus() ?></td>
                        <td class = "mng-th mng-link"><?= h($work->link) ?></td>
                        <td class="actions mng-th mng-actions">
                            [ <?= $this->Html->link(__('Edit'), ['action' => 'edit', $work->id]) ?> ]
                            [ <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $work->id], ['confirm' => __('この作品のデータを消去しますか # {0}?', $work->id)]) ?> ]
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
</body>