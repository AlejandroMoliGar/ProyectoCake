<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $infoBeca
 */
?>
<head>
    <meta charset="utf-8">
    <title>Departamento de Becas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FCDE9C;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Info Becas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="infoBecas form content">
            <?= $this->Form->create($infoBeca) ?>
            <fieldset>
                <legend><?= __('Add Info Beca') ?></legend>
                <?php
                    echo $this->Form->control('No_Control');
                    echo $this->Form->control('Id_Personal');
                    echo $this->Form->control('Id_beca');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
