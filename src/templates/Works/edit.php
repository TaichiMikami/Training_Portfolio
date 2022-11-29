<body>
    <div class="main-wrapper add-main-wrapper">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('[ Delete This Work ]'),
                ['action' => 'delete', $work->id],
                ['confirm' => __('この作品のデータを消去しますか # {0}?', $work->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('[ Back To List ]'), ['action' => 'management'], ['class' => 'side-nav-item']) ?>
        </div>
        <div class="works form content">
            <?= $this->Form->create($work) ?>
                <table>
                    <tr>
                        <td>Artist</td>
                        <td><div class = "editcontents"><?php echo $this->Form->control('artist'); ?></div></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td><div class = "editcontents"><?php echo $this->Form->control('title'); ?></div></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td><div class = "editcontents"><?php echo $this->Form->select('type', array(1 => "VoMix", 2 => "ParaMix")); ?></div></td>
                    </tr>
                    <tr>
                        <td>Mastering</td>
                        <td><div class = "editcontents"><?php echo $this->Form->select('mastering', array(1 => "DID", 2 => "NOT")); ?></div></td>
                    </tr>
                    <tr>
                        <td>Display</td>
                        <td><div class = "editcontents"><?php echo $this->Form->select('display', array(1 => "ON", 2 => "OFF")); ?></div></td>
                    </tr>
                    <tr>
                        <td>Link</td>
                        <td><div class = "editcontents"><?php echo $this->Form->control('link'); ?></div></td>
                    </tr>  
                </table>
            <div class = submit-btn><?= $this->Form->button(__('Change Submit')) ?></div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</body>