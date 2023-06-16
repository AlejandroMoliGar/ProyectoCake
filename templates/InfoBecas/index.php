<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $infoBecas
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
<div class="infoBecas index content">
    <?= $this->Html->link(__('New Info Beca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Info Becas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID_IBeca') ?></th>
                    <th><?= $this->Paginator->sort('No_Control') ?></th>
                    <th><?= $this->Paginator->sort('Id_Personal') ?></th>
                    <th><?= $this->Paginator->sort('Id_beca') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infoBecas as $infoBeca): ?>
                <tr>
                    <td><?= $this->Number->format($infoBeca->ID_IBeca) ?></td>
                    <td><?= $this->Number->format($infoBeca->No_Control) ?></td>
                    <td><?= $this->Number->format($infoBeca->Id_Personal) ?></td>
                    <td><?= $this->Number->format($infoBeca->Id_beca) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $infoBeca->ID_IBeca]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $infoBeca->ID_IBeca]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $infoBeca->ID_IBeca], ['confirm' => __('Are you sure you want to delete # {0}?', $infoBeca->ID_IBeca)]) ?>
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
