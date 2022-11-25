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
<div class = "main">
    <div class = "main-wrapper">
        <h1>recently works</h1>
        <?php $i = 0; foreach ($works as $k => $work): ?>
            <?php if($work->display == 2){continue;}
                if($i == 6){break;}
                $position = $i % 2 + 1; $i ++; ?>
            <div class = "song-container-<?php echo $position ?>">
                <div class = "movie">
                    <iframe width="320" height="180" 
                        src="https://www.youtube.com/embed/<?= $work->link ?>?loop=1&mute=1&modestbranding=1"
                        frameborder="0" allowfullscreen>
                    </iframe>
                </div>
                <div class = "text-container">
                    <p class = "text">
                        <?= h($work->artist) ?> - <?= h($work->title) ?>
                        <br>
                        <?= $work->getTypeText() ?>
                        <?= $work->getMasteringText() ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class = "footer">
    <ul class="menu">
        <li><i class="fa-brands fa-twitter"></i><a href="#">twitter</a></li>
        <li><i class="fa-brands fa-instagram"></i><a href="#">instagram</a></li>
        <li><i class="fa-brands fa-youtube"></i><a href="#">youtube</a></li>
     </ul>
</div>
