
<?php $__env->startSection('titulo','Alunos'); ?>
<?php $__env->startSection('conteudo'); ?>
<div class='container'>
    <h3 class='center'>Lista de Alunos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr> <!-- CABECALHO -->
                    <td>Id</td>
                    <td>Nome</td>
                    <td>RA</td>
                    <td>Data Nascimento</td>
                    <td>Celular</td>
                    <td>Email</td>
                    <td>Foto</td>
                </tr>
            </thead>
            
            <tbody>
                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- LOOP PRA LER A TABELA -->
                    <tr>
                        <td><?php echo e($row->id); ?></td>
                        <td><?php echo e($row->nome); ?></td>
                        <td><?php echo e($row->ra); ?></td>
                        <td><?php echo e($row->data_nasc); ?></td>
                        <td><?php echo e($row->celular); ?></td>
                        <td><?php echo e($row->email); ?></td>
                        <td><?php echo e($row->imagem); ?></td>
                        <td><img src="<?php echo e(asset($row->imagem)); ?>" alt="<?php echo e($row->titulo); ?>" width="120" height="100"></td>
                        <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' style="margin:10;" href="<?php echo e(route('admin2.alunos.editar',$row->id)); ?>">Alterar</a>
                        <a class='btn rede' style="margin:10;" href="<?php echo e(route('admin2.alunos.excluir',$row->id)); ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class='row'> <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="<?php echo e(route('admin2.alunos.adicionar')); ?>">Adicionar</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/admin2/alunos/index.blade.php ENDPATH**/ ?>