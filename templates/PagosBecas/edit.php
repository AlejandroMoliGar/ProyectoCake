<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pagosBeca
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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pagosBeca->Id_Pagos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pagosBeca->Id_Pagos), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pagos Becas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagosBecas form content">
            <?= $this->Form->create($pagosBeca) ?>
            <fieldset>
                <legend><?= __('Edit Pagos Beca') ?></legend>
                <?php
                    echo $this->Form->control('SI');
                    echo $this->Form->control('NO');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
