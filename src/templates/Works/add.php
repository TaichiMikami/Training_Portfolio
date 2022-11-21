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
            <?= $this->Html->link(__('List Works'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="works form content">
            <?= $this->Form->create($work) ?>
            <fieldset>
                <legend><?= __('Add Work') ?></legend>
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
