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
            <?= $this->Html->link(__('Edit Info Escolar'), ['action' => 'edit', $infoEscolar->No_Control], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Info Escolar'), ['action' => 'delete', $infoEscolar->No_Control], ['confirm' => __('Are you sure you want to delete # {0}?', $infoEscolar->No_Control), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Info Escolar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Info Escolar'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="infoEscolar view content">
            <h3><?= h($infoEscolar->No_Control) ?></h3>
            <table>
                <tr>
                    <th><?= __('Semestre') ?></th>
                    <td><?= h($infoEscolar->semestre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carreras') ?></th>
                    <td><?= h($infoEscolar->carreras) ?></td>
                </tr>
                <tr>
                    <th><?= __('No Control') ?></th>
                    <td><?= $this->Number->format($infoEscolar->No_Control) ?></td>
                </tr>
                <tr>
                    <th><?= __('Promedio Escolar') ?></th>
                    <td><?= $this->Number->format($infoEscolar->Promedio_Escolar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Personal') ?></th>
                    <td><?= $this->Number->format($infoEscolar->Id_Personal) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
