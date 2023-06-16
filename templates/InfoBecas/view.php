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
            <?= $this->Html->link(__('Edit Info Beca'), ['action' => 'edit', $infoBeca->ID_IBeca], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Info Beca'), ['action' => 'delete', $infoBeca->ID_IBeca], ['confirm' => __('Are you sure you want to delete # {0}?', $infoBeca->ID_IBeca), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Info Becas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Info Beca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="infoBecas view content">
            <h3><?= h($infoBeca->ID_IBeca) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID IBeca') ?></th>
                    <td><?= $this->Number->format($infoBeca->ID_IBeca) ?></td>
                </tr>
                <tr>
                    <th><?= __('No Control') ?></th>
                    <td><?= $this->Number->format($infoBeca->No_Control) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Personal') ?></th>
                    <td><?= $this->Number->format($infoBeca->Id_Personal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Beca') ?></th>
                    <td><?= $this->Number->format($infoBeca->Id_beca) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
