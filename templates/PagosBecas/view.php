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
            <?= $this->Html->link(__('Edit Pagos Beca'), ['action' => 'edit', $pagosBeca->Id_Pagos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pagos Beca'), ['action' => 'delete', $pagosBeca->Id_Pagos], ['confirm' => __('Are you sure you want to delete # {0}?', $pagosBeca->Id_Pagos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pagos Becas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pagos Beca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagosBecas view content">
            <h3><?= h($pagosBeca->Id_Pagos) ?></h3>
            <table>
                <tr>
                    <th><?= __('SI') ?></th>
                    <td><?= h($pagosBeca->SI) ?></td>
                </tr>
                <tr>
                    <th><?= __('NO') ?></th>
                    <td><?= h($pagosBeca->NO) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pagos') ?></th>
                    <td><?= $this->Number->format($pagosBeca->Id_Pagos) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
