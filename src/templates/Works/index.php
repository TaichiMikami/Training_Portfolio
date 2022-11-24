<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Work> $works
 */
?>

<header>
    <div class = "title">Taichi's Portfolio</div>
</header>
<div class = main>
    <h1>recently works</h1>
    <?php foreach ($works as $work): ?>
        <?php if($work->display == 2){continue;} ?>
        <div class = "song_container">
            <ul>
                <li class = movie>
                <iframe width="320" height="180" src="https://www.youtube.com/embed/{$this->link}
                    ?loop=1 &mute=1 &modestbranding=1"
                    frameborder="0" allowfullscreen>
                </iframe>
                </li>
                <li class = title>
                    <?= h($work->artist) ?> - <?= h($work->title) ?>
                </li>
                <li class = type>
                    <?= $work->getTypeText() ?>
                    <?= $work->getMasteringText() ?>
                </li>
            </ul>
        </div>
    <?php endforeach; ?>
</div>
</div>
