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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $work->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $work->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Works'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="works form content">
            <?= $this->Form->create($work) ?>
            <fieldset>
                <legend><?= __('Edit Work') ?></legend>
                <?php
                    echo $this->Form->control('artist');
                    echo $this->Form->control('title');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
