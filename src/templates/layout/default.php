<?php $cakeDescription = 'CakePHP: the rapid development php framework'; ?>

<!DOCTYPE html>

<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- CSSの読み込み -->
    <?= $this->Html->css(['works']) ?>

    <!-- FONTAWESOMEの読み込み -->
    <script src="https://kit.fontawesome.com/13e544be3c.js" crossorigin="anonymous"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<!-- HEADERの読み込み -->
<?php echo $this->element("header"); ?>

<!-- BODYの読み込み -->
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<!-- FOOTERの読み込み -->
<?php echo $this->element("footer"); ?>

</html>
