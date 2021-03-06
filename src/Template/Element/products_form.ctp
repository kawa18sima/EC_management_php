<?php
 echo $this->Html->script('submit_button.js');
?>

<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Product') ?></legend>
        <?php
            echo $this->Form->control('title',[
                'label' => 'タイトル'
            ]);
            echo $this->Form->control('image', [
                'type' => 'file',
                'label' => '画像[png, jpeg, gif] 2MB未満'
            ]);
            echo $this->Form->control('details', [
                'label' => '詳細',
                'required' => false,
            ]);
            echo $this->Form->control('price', [
                'label' => '価格'
            ]);
            echo $this->Form->control('stock', [
                'label' => '在庫'
            ]);
            echo $this->Form->control('saleDate',  [
                'label' => '発売日',
                'minYear' => date('Y'),
                'maxYear' => date('Y') + 5,
                'monthNames' => false
            ]);
            echo $this->Form->hidden('user_id', [
                'value' => $users['id']
            ]);
            echo $this->Form->control('categories',[
                'label' => 'カテゴリー',
                'type' => 'select',
                'options' => $array,
                'multiple' => true,
                'value' => $value
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
