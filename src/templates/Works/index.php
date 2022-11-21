<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Work> $works
 */
?>
<div class = "works_toppage">
    <h1>my works</h1>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('artist') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($works as $work): ?>
                <tr>
                    <td><?= $this->Number->format($work->id) ?></td>
                    <td><?= h($work->artist) ?></td>
                    <td><?= h($work->title) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
