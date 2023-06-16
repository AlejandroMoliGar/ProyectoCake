<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $infoEscolar
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
                ['action' => 'delete', $infoEscolar->No_Control],
                ['confirm' => __('Are you sure you want to delete # {0}?', $infoEscolar->No_Control), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Info Escolar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="infoEscolar form content">
            <?= $this->Form->create($infoEscolar) ?>
            <fieldset>
                <legend><?= __('Edit Info Escolar') ?></legend>
                <?php
                    echo $this->Form->control('semestre');
                    echo $this->Form->control('carreras');
                    echo $this->Form->control('Promedio_Escolar');
                    echo $this->Form->control('Id_Personal');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
