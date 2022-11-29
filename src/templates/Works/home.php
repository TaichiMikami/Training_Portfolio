<body>
    <div class = "main-wrapper">
        <h1>recently works</h1>
        <?php $i = 0; foreach ($works as $k => $work): ?>
            <?php if($work->display == 2){continue;}
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
            <?php if($i == 5){break;} ?>
            <div class = "space"></div>
        <?php endforeach; ?>
    </div>
</body>
