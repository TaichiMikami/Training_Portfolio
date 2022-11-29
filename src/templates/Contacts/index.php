<body>
    <div class = "main-wrapper form-main-wrapper">
        <h1>contact</h1>
        <?php echo $this->Form->create(NULL, ['url' => ['action' => 'confirm']]); ?>
        <table class = "form-table">
            <tr class = "form-container name">
                <td class = "head-area">名前</td>
                <td class = "input-area"><?php  echo $this->Form->input("name"); ?></td>
            </tr>
            <tr class = "form-container email">
                <td class = "head-area">メールアドレス</td>
                <td class = "input-area"><?php  echo $this->Form->input("email"); ?></td>
            </tr>
            <tr class = "form-container type">
                <td class = "head-area">お問い合わせの種類</td>
                <td class = "input-area"><?php  echo $this->Form->input("type"); ?></td>
            </tr>
            <tr class = "form-container body">
                <td class = "head-area">内容</td>
                <td class = "input-area text-area"><?php  echo $this->Form->textarea("body", ["rows" => "10"]); ?></td>
            </tr>
        </table>
        <?php echo $this->Form->submit("confirm") ?>
        <?php echo $this->Form->end(); ?>
    </div>
</body>