<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $infoPersonal
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
<div class="infoPersonal index content">
    <?= $this->Html->link(__('New Info Personal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Info Personal') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Personal') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Apellido_Paterno') ?></th>
                    <th><?= $this->Paginator->sort('Apellido_Materno') ?></th>
                    <th><?= $this->Paginator->sort('Telefono') ?></th>
                    <th><?= $this->Paginator->sort('Correo_electronico') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infoPersonal as $infoPersonal): ?>
                <tr>
                    <td><?= $this->Number->format($infoPersonal->Id_Personal) ?></td>
                    <td><?= h($infoPersonal->Nombre) ?></td>
                    <td><?= h($infoPersonal->Apellido_Paterno) ?></td>
                    <td><?= h($infoPersonal->Apellido_Materno) ?></td>
                    <td><?= h($infoPersonal->Telefono) ?></td>
                    <td><?= h($infoPersonal->Correo_electronico) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $infoPersonal->Id_Personal]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $infoPersonal->Id_Personal]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $infoPersonal->Id_Personal], ['confirm' => __('Are you sure you want to delete # {0}?', $infoPersonal->Id_Personal)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>
