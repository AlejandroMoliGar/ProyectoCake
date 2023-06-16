<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $infoEscolar
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
<div class="infoEscolar index content">
    <?= $this->Html->link(__('New Info Escolar'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Info Escolar') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('No_Control') ?></th>
                    <th><?= $this->Paginator->sort('semestre') ?></th>
                    <th><?= $this->Paginator->sort('carreras') ?></th>
                    <th><?= $this->Paginator->sort('Promedio_Escolar') ?></th>
                    <th><?= $this->Paginator->sort('Id_Personal') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infoEscolar as $infoEscolar): ?>
                <tr>
                    <td><?= $this->Number->format($infoEscolar->No_Control) ?></td>
                    <td><?= h($infoEscolar->semestre) ?></td>
                    <td><?= h($infoEscolar->carreras) ?></td>
                    <td><?= $this->Number->format($infoEscolar->Promedio_Escolar) ?></td>
                    <td><?= $this->Number->format($infoEscolar->Id_Personal) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $infoEscolar->No_Control]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $infoEscolar->No_Control]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $infoEscolar->No_Control], ['confirm' => __('Are you sure you want to delete # {0}?', $infoEscolar->No_Control)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
