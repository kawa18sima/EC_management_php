<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('管理アクション') ?></li>
        <li><?= $this->Html->link(__('商品リスト'), ['controller' => 'Products', 'action' => 'managements']) ?></li>
        <li><?= $this->Html->link(__('商品作成'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('カテゴリー一覧'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('カテゴリー作成'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <?php if($current_user['level'] == 2): ?>
            <li><?= $this->Html->link(__('ユーザーリスト'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('購入結果管理'), ['controller' => 'Purchases', 'action' => 'managements']) ?></li>
        <?php endif ?>
    </ul>
</nav>
