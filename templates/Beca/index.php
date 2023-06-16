<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Beca> $beca
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
<div class="beca index content">
    
    <h3><?= __('Beca') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_beca') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Beca') ?></th>
                    <th><?= $this->Paginator->sort('Categoria') ?></th>
                    <th><?= $this->Paginator->sort('Descripcion') ?></th>
                    <th><?= $this->Paginator->sort('Periodo') ?></th>
                    <th><?= $this->Paginator->sort('Monto') ?></th>
                    <th><?= $this->Paginator->sort('Duracion_beca') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($beca as $beca): ?>
                <tr>
                    <td><?= $this->Number->format($beca->Id_beca) ?></td>
                    <td><?= h($beca->Nombre_Beca) ?></td>
                    <td><?= h($beca->Categoria) ?></td>
                    <td><?= h($beca->Descripcion) ?></td>
                    <td><?= h($beca->Periodo) ?></td>
                    <td><?= $this->Number->format($beca->Monto) ?></td>
                    <td><?= h($beca->Duracion_beca) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
