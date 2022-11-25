<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Work $work
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
<div class="main-wrapper add-main-wrapper">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            [ <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $work->id],
                ['confirm' => __('この作品のデータを消去しますか # {0}?', $work->id), 'class' => 'side-nav-item']
            ) ?> ]
            [ <?= $this->Html->link(__('List Works'), ['action' => 'index'], ['class' => 'side-nav-item']) ?> ]
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="works form content">
            <?= $this->Form->create($work) ?>
            <fieldset>
                <legend><?= __('Edit Work') ?></legend>
                    <div class = "editcontents"><?php echo $this->Form->control('artist'); ?></div>
                    <div class = "editcontents"><?php echo $this->Form->control('title'); ?></div>
                    <div class = "editcontents"><?php echo $this->Form->control('type')."(VoMix : 1, ParaMix : 2)"; ?></div>
                    <div class = "editcontents"><?php echo $this->Form->control('mastering')."(Did : 1, Not : 2)"; ?></div>
                    <div class = "editcontents"><?php echo $this->Form->control('display')."(ON : 1, OFF : 2)"; ?></div>
                    <div class = "editcontents"><?php echo $this->Form->control('link')."(ID of YouTube)"; ?></div>
            </fieldset>
            <div class = submit-btn><?= $this->Form->button(__('Submit')) ?></div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
