<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $pagosBecas
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
<div class="pagosBecas index content">
    <?= $this->Html->link(__('New Pagos Beca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pagos Becas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Pagos') ?></th>
                    <th><?= $this->Paginator->sort('SI') ?></th>
                    <th><?= $this->Paginator->sort('NO') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pagosBecas as $pagosBeca): ?>
                <tr>
                    <td><?= $this->Number->format($pagosBeca->Id_Pagos) ?></td>
                    <td><?= h($pagosBeca->SI) ?></td>
                    <td><?= h($pagosBeca->NO) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pagosBeca->Id_Pagos]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pagosBeca->Id_Pagos]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pagosBeca->Id_Pagos], ['confirm' => __('Are you sure you want to delete # {0}?', $pagosBeca->Id_Pagos)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
