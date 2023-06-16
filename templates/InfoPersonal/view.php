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
            <?= $this->Html->link(__('Edit Info Personal'), ['action' => 'edit', $infoPersonal->Id_Personal], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Info Personal'), ['action' => 'delete', $infoPersonal->Id_Personal], ['confirm' => __('Are you sure you want to delete # {0}?', $infoPersonal->Id_Personal), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Info Personal'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Info Personal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="infoPersonal view content">
            <h3><?= h($infoPersonal->Id_Personal) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($infoPersonal->Nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido Paterno') ?></th>
                    <td><?= h($infoPersonal->Apellido_Paterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido Materno') ?></th>
                    <td><?= h($infoPersonal->Apellido_Materno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($infoPersonal->Telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo Electronico') ?></th>
                    <td><?= h($infoPersonal->Correo_electronico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Personal') ?></th>
                    <td><?= $this->Number->format($infoPersonal->Id_Personal) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
