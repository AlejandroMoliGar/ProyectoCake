<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $infoPersonal
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
                ['action' => 'delete', $infoPersonal->Id_Personal],
                ['confirm' => __('Are you sure you want to delete # {0}?', $infoPersonal->Id_Personal), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Info Personal'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="infoPersonal form content">
            <?= $this->Form->create($infoPersonal) ?>
            <fieldset>
                <legend><?= __('Edit Info Personal') ?></legend>
                <?php
                    echo $this->Form->control('Nombre');
                    echo $this->Form->control('Apellido_Paterno');
                    echo $this->Form->control('Apellido_Materno');
                    echo $this->Form->control('Telefono');
                    echo $this->Form->control('Correo_electronico');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
