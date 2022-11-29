<body>
    <div class = "main-wrapper form-main-wrapper">
        <h1>confirm</h1>
        <?php echo $this->Form->create(NULL, ['url' => ['action' => 'send']]); ?>
        <table class = "form-table">
            <tr class = "form-container name">
                <td class = "head-area">名前</td>
                <td class = "input-area">
                    <?php echo $postdata["name"]; ?>
                    <?php echo $this->Form->hidden("name") ?>
                </td>
            </tr>
            <tr class = "form-container email">
                <td class = "head-area">メールアドレス</td>
                <td class = "input-area">
                    <?php echo $postdata["email"]; ?>
                    <?php echo $this->Form->hidden("email") ?>
                </td>
            </tr>
            <tr class = "form-container type">
                <td class = "head-area">お問い合わせの種類</td>
                <td class = "input-area">
                    <?php echo $postdata["type"]; ?>
                    <?php echo $this->Form->hidden("type") ?>
                </td>
            </tr>
            <tr class = "form-container body">
                <td class = "head-area">内容</td>
                <td class = "input-area text-area">
                    <?php echo nl2br($postdata["body"]); ?>
                    <?php echo $this->Form->hidden("body") ?>
                </td>
            </tr>
        </table>
        <?php echo $this->Form->submit("submit") ?>
        <?php echo $this->Form->end(); ?>
    </div>
</body>